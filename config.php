<?php
	session_start();

	require_once "Facebook/autoload.php";
	
	//Replace the app_id,app_secret with yours.
	$FB = new \Facebook\Facebook([
		'app_id' => '1869971263064419',
		'app_secret' => 'c7d477b3c2cb729588215737ff1858cf',
		'default_graph_version' => 'v3.0'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>
