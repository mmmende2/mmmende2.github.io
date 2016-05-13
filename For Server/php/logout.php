<?php
	//serverserver
	//a7 lgout
	
	session_id('user');
	session_name('user');
	session_start('user');
	session_unset();
	session_destroy('user');
	$_SESSION = array();
	
	
	header('Location: login.php');
	
	exit;
	



?>