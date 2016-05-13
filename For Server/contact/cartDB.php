<?php

	//SERVER SERVER SERVERS 
	//
	//project final!!
	//cartDB.php
	//Spring2161
	//mariomendez
	
	$host = 'localhost';
	$user = 'mmmende2';
	$pw = 'cis425';
	$db = 'mmmende2';
	
	//set up db connectino
	
	$dbc = mysqli_connect($host, $user, $pw, $db) or die('Unable to connect - SERVER Koala: ' .mysql_connect_error());
	
	
?>