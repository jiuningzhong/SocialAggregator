<?php	

require_once( 'my_twitter.php' );

$twitter =  new MyTwitter('jiuning', '198749');

$status = $twitter->userTimeLine();

$total = count($status);

	
for ( $i=0; $i < $total ; $i++ )
		{ 
		
		echo "<p>". $status[$i]['text'] ."</p>";
		
		}
		

$tweets_result=file_get_contents("https://api.twitter.com/1/statuses/user_timeline.json?include_entities=true&include_rts=true&screen_name=jiuning&count=5");
$data=json_decode($tweets_result);
print_r($data);
?>













