<?php

class TwitterFeed
{
	protected $json = '[]';
	protected $tweets = array();
	protected $cacheEnabled = TRUE; // the caching system is on
	protected $cacheFile = "cache/%s.json"; // cache file - folder must have write permissions
	protected $cacheRelativePath = ""; // if set, then add a trailing / (slash)
	protected $cacheLifetime = 600; // (10min = 60sec * 10)

	public function setCachingOptions($cacheFile,$cacheLifetime)
	{
		$this->cacheFile = $cacheFile;
		$this->cacheLifetime = $cacheLifetime;
	}

	public function setCachingDirectory($cacheRelativePath)
	{
		$this->cacheRelativePath = $cacheRelativePath;
	}

	public function enableCaching($caching=TRUE)
	{
		$this->cacheEnabled = $caching;
	}

	public function clearCache()
	{
		if (file_exists($this->cacheRelativePath.$cacheFile))
		{
			return unlink($this->cacheRelativePath.$cacheFile);
		}
		else
		{
			return FALSE;
		}
	}

	public function init($user, $limit = 6, $includeRetweets = TRUE, $excludeReplies = FALSE)
	{
		try
		{
			$cacheFile = strtolower(sprintf($this->cacheFile, $user));

			// load cache if it exists and it hasn't expired
			if($this->cacheEnabled && file_exists($this->cacheRelativePath.$cacheFile))
			{
				$cacheTime = filemtime($this->cacheRelativePath.$cacheFile);
				if($cacheTime > time() - $this->cacheLifetime)
				{
					$this->json = file_get_contents($this->cacheRelativePath.$cacheFile);
					return;
				}
			}
			$url = 'http://api.twitter.com/1.1/statuses/user_timeline.json?screen_name='.$user.'&count='.$limit;
			if ($includeRetweets) $url.= "&include_rts=true";
			if ($excludeReplies) $url.= "&exclude_replies=true";
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			
			$this->json = curl_exec($ch);
			$responseInfo = curl_getinfo($ch);
			$httpCode = $responseInfo['http_code'];
			curl_close($ch);
			if ($httpCode == 200)
			{
				if ($this->cacheEnabled)
				{
					// cache the results
					file_put_contents($this->cacheRelativePath.$cacheFile, $this->json);
				}
			}
			else if ($httpCode == 404)
			{
				$this->json = '[]';
				return;
			}
			else
			{
				if ($this->cacheEnabled && file_exists($this->cacheRelativePath.$cacheFile))
				{
					$this->json = file_get_contents($this->cacheRelativePath.$cacheFile);
				}
			}
		}
		catch (Exception $e) { }
	}
	
	public function initlist($user, $list, $limit = 6, $includeRetweets = TRUE, $excludeReplies = FALSE)
	{
		try
		{
			$cacheFile = strtolower(sprintf($this->cacheFile, $user."-".$list));

			// load cache if it exists and it hasn't expired
			if($this->cacheEnabled && file_exists($this->cacheRelativePath.$cacheFile))
			{
				$cacheTime = filemtime($this->cacheRelativePath.$cacheFile);
				if($cacheTime > time() - $this->cacheLifetime)
				{
					$this->json = file_get_contents($this->cacheRelativePath.$cacheFile);
					return;
				}
			}
			$url = 'http://api.twitter.com/1.1/lists/statuses.json?slug='.$list.'&owner_screen_name='.$user.'&count='.$limit;
			if ($includeRetweets) $url.= "&include_rts=true";
			if ($excludeReplies) $url.= "&exclude_replies=true";
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			$this->json = curl_exec($ch);
			$responseInfo = curl_getinfo($ch);
			$httpCode = $responseInfo['http_code'];
			curl_close($ch);
			if ($httpCode == 200)
			{
				if ($this->cacheEnabled)
				{
					// cache the results
					file_put_contents($this->cacheRelativePath.$cacheFile, $this->json);
				}
			}
			else if ($httpCode == 404)
			{
				$this->json = '[]';
				return;
			}
			else
			{
				if ($this->cacheEnabled && file_exists($this->cacheRelativePath.$cacheFile))
				{
					$this->json = file_get_contents($this->cacheRelativePath.$cacheFile);
				}
			}
		}
		catch (Exception $e) { }
	}

	public function time_since($original)
	{
		$chunks = array(
			array(31536000 , 'year'), // 60 * 60 * 24 * 365
			array(2592000 , 'month'), // 60 * 60 * 24 * 30
			array(604800, 'week'), // 60 * 60 * 24 * 7
			array(86400 , 'day'), // 60 * 60 * 24
			array(3600 , 'hour'), // 60 * 60
			array(60 , 'minute'),
		);
		$today = time();
		$since = $today - $original;

		// $j saves performing the count function each time around the loop
		for ($i = 0, $j = count($chunks); $i < $j; $i++)
		{
			$seconds = $chunks[$i][0];
			$name = $chunks[$i][1];
			// finding the biggest chunk (if the chunk fits, break)
			if (($count = floor($since / $seconds)) != 0) break;
		}
		$print = ($count == 1) ? "$count {$name} ago" : "$count {$name}s ago";
		return $print;
	}

	public function statusUrlConverter($status, $targetBlank=true, $linkMaxLen=250)
	{

		$target=$targetBlank ? "target=\"_blank\"" : "";

		// convert link to url
		$status = preg_replace("/((http:\/\/|https:\/\/)[^ )]+)/e", "'<a href=\"$1\" title=\"$1\" $target>'. ((strlen('$1')>=$linkMaxLen ? substr('$1',0,$linkMaxLen).'...':'$1')).'</a>'", $status);

		// convert @ to follow
		$status = preg_replace("/(@([_a-z0-9\-]+))/i","<a href=\"http://twitter.com/$2\" title=\"Follow $2\" $target>$1</a>",$status);

		// convert # to search
		$status = preg_replace("/(#([_a-z0-9\-]+))/i","<a href=\"http://search.twitter.com/search?q=%23$2\" title=\"Search $1\" $target>$1</a>",$status);

		return $status;
	}

	public function getTweets()
	{
		$result = json_decode($this->json);
		if (isset($result))
		{
			foreach($result as $entry)
			{
				$entry->html = $this->statusUrlConverter($entry->text);
				$entry->updated = $this->time_since((int) strtotime($entry->created_at));
				array_push($this->tweets, $entry);
			}
			unset($result);
		}
		unset($feed, $json, $tweet);
		return $this->tweets;
	}
}