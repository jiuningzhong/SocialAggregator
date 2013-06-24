<?php

require_once( 'my_twitter.php' );

$twitter =  new MyTwitter('jiuning', '198749');


/********************* Status Methods *****************************/

//Update Your Status
	$twitter->updateStatus('Proving My Twitter!');
	

//Show last 20 Status of User Time Line in array format. 
	$twitter->userTimeLine();	

//Show last 20 Status of Following Time Line in array format.  
	$twitter->followingTimeLine();
	//Optional $twitter->followingTimeLine(2) to show next page with 20 more status
	

//Show last 20 Status of Public Time Line in array format.  
	$twitter->publicTimeLine();
	

//Show Replies of your Updates in array format.  
	$twitter->repliesLine();
	//Optional $twitter->repliesLine(2) to show next page	

//Show a single status, specified by the id parameter below, in array format.  
	$twitter->showStatus(1234);	
	//Requires input of the post ID

//Destroy a single status, specified by the id parameter below
	$twitter->destroyStatus(1234);	
	//Requires input of the post ID
	
	
/********************* User Methods *****************************/

//Returns up to 100 of the authenticating users you follow who have most recently updated, in array format.
	$twitter->userFollowing();
	
//Returns the authenticating user's followers.
	$twitter->userFollowers();
	
//Returns a list of the users currently featured on the site with their current statuses inline; in array format.
	$twitter->userFeatured();
	
//Show a single status, specified by the id or screen name parameter below
	$twitter->userShow('screen_name or userID');


/******************** Direct Message Methods************************/

//Sends a new direct message to the specified user from the authenticating user
	$twitter->newMessage('screen_name', 'message to send');
	
//Destroy a single message, specified by the id parameter below
	$twitter->destroyMessage(1234);	
	//Requires input of the post ID

//Returns a list of the 20 most recent direct messages sent to the authenticating user; in array format.
	$twitter->directMessages();
	
//Returns a list of the 20 most recent direct messages sent by the authenticating user; in array format.
	$twitter->senttMessages();
	

/********************** Following Methods****************************/

//Follow the user specified in the ID parameter as the authenticating user
	$twitter->follow('screen_name or userID');	
	//Requires input of the post ID or Screen Name 
	
//Discontinues follow with the user specified in the ID parameter as the authenticating user
	$twitter->destroyFollow('screen_name or userID');	
	//Requires input of the post ID or Screen Name
		
?>