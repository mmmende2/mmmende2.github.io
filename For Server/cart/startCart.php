<?php
	//SERVER SERVER SERVERS 
	//
	//project final!!
	//startCart.php
	//you basically jsut need startsess
	//Spring2161
	//mariomendez
	
	$host = 'localhost';
	$user = 'mmmende2';
	$pw = 'cis425';
	$db = 'mmmende2';
	
	//set up db connectino
	
	$dbc = mysqli_connect($host, $user, $pw, $db) or die('Unable to connect - LOCAL Koala: ' .mysql_connect_error());
	
	//start the session'cart'
	
	session_name('cart');
	session_start();
?>