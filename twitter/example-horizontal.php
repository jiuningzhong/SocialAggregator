<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Twitter Horizontal Timeline</title>
	<meta name="author" content="Liviu Cerchez" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" href="assets-docs/css/bronto.css" media="all" />
	<link rel="stylesheet" href="assets-docs/css/site.css" media="all" />
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="assets-docs/css/ie.css" type="text/css" media="screen" />
		<script src="assets-docs/js/respond.min.js"></script>
	<![endif]-->

	<!-- required css -->
	<link rel="stylesheet" href="css/twitter-timeline.css" media="all" />
	<!-- required js for horizontal version (uses a carousel slider) -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script src="js/jquery.twitterslide.min.js"></script>
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
	<div id="wrapper-content" class="container">

<?php
	$twitterUser = 'KingJames';
	require("twitterAPI.php");
	$twitterAPI = new TwitterFeed();
	$twitterAPI->init($twitterUser,20,FALSE,FALSE);
	$tweets = $twitterAPI->getTweets();
?>

		<div id="vertical-example" class="row clearfix">
			<div class="grid_12 last">
				<br />
<?php if(count($tweets)>0) : ?>
				<div class="twitter-timeline twitter-timeline-horizontal clearfix">
					<div class="ts-carousel">
						<ul>
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
						</ul>
					</div>
				</div>
<?php else: ?>
				<p>No tweets found.<a href="http://twitter.com/<?php echo $twitterUser; ?>" class="profile" target="_blank">View Profile</a></p>
<?php endif; ?>
			</div>
		</div>

	</div>
</body>
</html>