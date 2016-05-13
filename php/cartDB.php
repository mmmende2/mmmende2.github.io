<?php
	//project final!!
	//cartDB.php
	//Spring2161
	//mariomendez
	
	$host = 'localhost';
	$user = 'root';
	$pw = '';
	$db = 'finalproject';
	
	//set up db connectino
	
	$dbc = mysqli_connect($host, $user, $pw, $db) or die('Unable to connect - LOCAL Koala: ' .mysql_connect_error());
	
	
?>