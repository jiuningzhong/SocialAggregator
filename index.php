<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>Social Aggregator</title>
	
	<link rel="stylesheet" href="css/normalize.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="author" href="https://plus.google.com/u/0/101375071793747675621"/>
	
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/jquery.scrollTo-1.4.3.1.min.js"></script>
	<script src="js/jquery.scrollorama.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.scrolldeck.js"></script>
	<script src="js/jquery.twitterslide.min.js"></script>
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="assets-docs/css/ie.css" type="text/css" media="screen" />
		<script src="assets-docs/js/respond.min.js"></script>
	<![endif]-->

	<!-- required css for both vertical and horizontal timelines -->
	<link rel="stylesheet" href="css/twitter-timeline.css" media="all" />
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('.twitter-timeline-horizontal').twitterslide({
				slideWidth : 328,
				minItems   : 1,
				margin     : 15
			});
		});
	</script>

</head>
<body>
	<a href="https://github.com/jiuningzhong/SocialAggregator/">
		<img style="position: absolute; top: 0; right: 0; border: 0; z-index: 999999999;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub" alt="Fork me on GitHub" />
	</a>
	
	<div id="header">
		<a href="#twitter" class="nav-button">Twitter</a>
		<a href="#facebook" class="nav-button">Facebook</a>
		<a href="#flickr" class="nav-button">Flickr</a>
		<a href="#tumblr" class="nav-button">Tumblr</a>
		<a href="#foursquare" class="nav-button">FourSquare</a>
		<a href="#credits" class="nav-button">Credits</a>
	</div>

	<div class="slide">
		<div id="instructions">
			Use left/right arrow to change slides
		</div>
		<h2 id="title">Social Aggregator</h2>
		<p id="author">
			created by <a href="https://twitter.com/jiuning">Jiuning Zhong</a>
			<a href="https://twitter.com/jiuning" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @jiuning</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</p>
		<p>A Social Aggregator for all your social feeds <br />
		<p id="powered"><small>Powered by <a href="http://johnpolacek.github.com/scrollorama">Scrollorama</a></small></p>

	</div>
	
	<div class="slide" id="twitter">
		<div class="container">
			<h2>King's Tweets</h2>
			<?php
				ini_set('display_errors', 1);
				require_once('TwitterAPIExchange.php');

				/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
				$settings = array(
				    'oauth_access_token' => "16770784-7moHuZZOkEQJMaPmr3yJyUhEulyWAhXgi5hjQkzJf",
				    'oauth_access_token_secret' => "UVdsDQsoOuOHeLUttMwz2eqpN1OuDb6DJNzcrUCFFE",
				    'consumer_key' => "UpdvsamJgEibOmHXrY7FXQ",
				    'consumer_secret' => "6VnjiJKY4lU5PHmqMKqILvKzTgAdtaQWDqFeTYNRYU"
				);

				/** Perform a GET request and echo the response **/
				/** Note: Set the GET field BEFORE calling buildOauth(); **/
				$url = 'http://api.twitter.com/1.1/statuses/user_timeline.json';
				$getfield = '?screen_name=kingjames&count=5';
				$requestMethod = 'GET';
				$twitter = new TwitterAPIExchange($settings);
				$response = $twitter->setGetfield($getfield)
				             ->buildOauth($url, $requestMethod)
				             ->performRequest();
				$tweets = $twitter->getTweets($response);
		?>
			<div id="wrapper-content" class="container">

				<div id="horizontal-example" class="row clearfix">
					<div class="grid_12 last">
							<?php if(count($tweets)>0) : ?>
											<ul class="twitter-timeline twitter-timeline-vertical clearfix">
							<?php
								$count = 0;
								foreach($tweets as $tweet) :
									$count++;
									if (isset($tweet->retweeted_status)) : ?>
												<li class="<?php if ($count%2==1) echo "odd"; else echo "even"; ?>"><p class="tweet clearfix"><a href="https://twitter.com/<?php echo $tweet->retweeted_status->user->screen_name; ?>" class="avatar" target="_blank"><img src="<?php echo $tweet->retweeted_status->user->profile_image_url; ?>" alt="" /></a><strong class="name">Retweeted from <?php echo $tweet->retweeted_status->user->name; ?></strong> <?php echo $twitterAPI->statusUrlConverter($tweet->retweeted_status->text); ?> <br /><span class="date"><?php echo $tweet->updated; ?></span></p></li>
							<?php	else: ?>
												<li class="<?php if ($count%2==1) echo "odd"; else echo "even"; ?>"><p class="tweet clearfix"><a href="https://twitter.com/<?php echo $tweet->user->screen_name; ?>" class="avatar" target="_blank"><img src="<?php echo $tweet->user->profile_image_url; ?>" alt="" /></a><strong class="name"><?php echo $tweet->user->name; ?></strong> <?php echo $tweet->html; ?> <br /><span class="date"><?php echo $tweet->updated; ?></span></p></li>
							<?php	endif; ?>
							<?php endforeach; ?>
												<li class="more"><a href="http://twitter.com/<?php echo $twitterUser; ?>" target="_blank">View More</a></li>
											</ul>
							<?php else: ?>
											<p>No tweets found.<a href="http://twitter.com/<?php echo $twitterUser; ?>" class="profile" target="_blank">View Profile</a></p>
							<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="slide" id="facebook">
		<div class="container">
			<h2>Facebook</h2>
			<?php
				$app_id = "315418841926178";
				$app_secret = "0fd2479a3a321527f49c713e9cca8d60"; 
				$my_url = "https://nameless-temple-5077.herokuapp.com/";

		
				?>

		    <h3>Public profile of Lebron James</h3>
		    <img src="https://graph.facebook.com/LeBron/picture">
		</div>
	</div>

		<div class="slide" id="flickr">
		<div class="container">
			<h2>Flickr</h2>
		</div>
	</div>

		<div class="slide" id="tumblr">
		<div class="container">
			<h2>Tumblr</h2>
			<?php
			#
			# ***** END LICENSE BLOCK *****

			/*  Execution time counter */
			$nStartTime = microtime(true);

			/*  First, you have to include some files :
			/     * The Clearbricks _common.php file
			/     * The Tumblr class itself
			/*/
			require dirname(__FILE__).'/clearbricks/_common.php';
			require dirname(__FILE__).'/class.read.tumblr.php';

			/*  Now you can initiate the Tumblr object with the ID of the Tumblelog you want read from as param.
			/
			/   function __construct($sTumblrID = null,$sHTTPUserAgent = 'phpTumblr')
			/      * Initialize the Tumblr object, take a Tumblr ID as param.
			/      * Optionally take a second param, a string that will be the HTTP User Agent used for the requests made to the API.
			/*/
			$tumblr_id ='jiuningzhong';
			$oTumblr = new readTumblr($tumblr_id);

			/*  Now, it's time to do some requests from this API. This code will request, in the order:
			/      * 3 video posts
			/      * All regular posts
			/      * The posts with the ID 39185133
			/
			/   function getPosts($nStart = 0,$mNum = 20,$sType = null,$nID = null)
			/      * Request $mNum $sType posts starting from $nStart.
			/      * Take posts of all types if $sType = null.
			/
			/   OR
			/      * If $mNum = 'all', get all $sType posts starting from $nStart
			/      * Take posts of all types if $sType = null.
			/
			/   OR
			/      * If $nID is given, request the post with the ID $nID.
			/*/
			//$oTumblr->getPosts(0,3,'video');
			//$oTumblr->getPosts(null,'all','regular');
			$oTumblr->getPosts(null,null,null);

			/*  You're quite done! Now, you can get the array that contain the result.
			/
			/   function dumpArray($bChrono = false,$bDebug = false)
			/      * Sort the array in chronological order if $bChrono is true, inverse if false.
			/      * Return the array-formated content of the requests made to the API.
			/      * If $bDebug = true, return raw decoded JSON from the last request in ['temp'] key of the array. This option was mainly created to help me while dev.
			/*/
			$aTumblr = $oTumblr->dumpArray();

			/*  Execution time counter */
			$nEndTime = microtime(true);
			$nExecTime = $nEndTime - $nStartTime;
			if ($aTumblr['stats']['num-inarray'] > 0) { $nExecTimePerPost = $nExecTime / $aTumblr['stats']['num-inarray']; } else { $nExecTimePerPost = 0; }

			//echo $aTumblr['stats']['num-inarray'].' posts parsed in '.$nExecTime.'s, that means '.$nExecTimePerPost.'s per post !'."\n\n";
			//print_r($aTumblr);
			$tumblrs = $aTumblr['posts'];

			/*  Important note : you can do as much getPosts request as you like!
			/   It's impossible to have several times the same post in the array (array key composed with post's id and post's timestamp).
			/*/
			?>
			<div id="wrapper-content" class="container">

				<div id="horizontal-example" class="row clearfix">
					<div class="grid_12 last">
							<?php if(count($tumblrs)>0) : ?>
								<ul class="twitter-timeline twitter-timeline-vertical clearfix">
							<?php
								$count = 0;
								foreach($tumblrs as $tumblr) :
									$count++;
									if ($tumblr['type']=='regular') : ?>
								<li class="<?php if ($count%2==1) echo "odd"; else echo "even"; ?>"><p class="tweet clearfix"><a href="<?php echo $tumblr['url']; ?>" class="avatar" target="_blank"><img src="" alt="" /></a><strong class="name"><?php echo $tumblr_id; ?></strong> <?php echo strip_tags($tumblr['content']['title']); ?> <br /><?php echo strip_tags($tumblr['content']['body']); ?><span class="date"><?php echo date('Y-m-d H:i:s', $tumblr['time']); ?></span></p></li>
							<?php	else: ?>
								<li class="<?php if ($count%2==1) echo "odd"; else echo "even"; ?>"><p class="tweet clearfix"><a href="<?php echo $tumblr['url']; ?>" class="avatar" target="_blank"><img src="" alt="" /></a><strong class="name"><?php echo $tumblr_id; ?></strong> <?php echo strip_tags($tumblr['content']['caption'],"<br>"); ?> <br /><span class="date"><?php echo date('Y-m-d H:i:s', $tumblr['time']);; ?></span></p></li>
							<?php	endif; ?>
							<?php endforeach; ?>
								<li class="more"><a href="http://<?php echo $tumblr_id; ?>.tumblr.com/" target="_blank">View More</a></li>
								</ul>
							<?php else: ?>
								<p>No posts found.<a href="http://<?php echo $tumblr_id; ?>.tumblr.com/" class="profile" target="_blank">View Profile</a></p>
							<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

		<div class="slide" id="foursquare">
		<div class="container">
			<h2>Four Square</h2>
		</div>
	</div>
	
	<div class="slide" id="credits">
		<h2>Credits</h2>
		<p>scrolldeck.js &amp; <a href="http://johnpolacek.github.com/scrollorama">Scrollorama</a> by <a href="http://twitter.com/johnpolacek">John Polacek</a></p>
		<p><a href="http://demos.flesler.com/jquery/scrollTo/">jQuery ScrollTo</a> by <a href="https://twitter.com/#!/flesler">Ariel Flesler</a></p>
		<br />
		<p><small>Inspired by other cool slide deck js libraries:<br />
			<a href="http://dressrush.com/blog/post/12506021124/dressrush-online-pitch-deck">Pitch Deck</a>,
			<a href="http://imakewebthings.github.com/deck.js/">deck.js</a> and
			<a href="http://lab.hakim.se/reveal-js/#/">reveal.js</a>
		</small></p>
	</div>
	
	<img src="img/resize.png" id="resize-graphic" />
	
	<script>
	  $(document).ready(function() {
		  
			var deck = new $.scrolldeck({
				buttons: '.nav-button',
				easing: 'easeInOutExpo'
			});
			
			// add other animations using the scrolldeck.controller (see Scrollorama plugin)
			console.log(deck.controller);
			deck.controller.animate('#instructions',{ duration: 100, property:'opacity', end: 0 });
		  
	  });
	</script>

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-2821890-9']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

</body></html>