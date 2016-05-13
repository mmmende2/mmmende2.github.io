<?php
	//proccess
	//logins
	//SER V ER SERVE ESERVER 
	//projectFinal
	//spring 2016
	//deande
	
	//connect to db - LOCAL OR SERVER
	include('../connect/server-connect.php');
	
	//varaible for cslashes
	$chars = '_%';
	
	//get user name from html_
	$uname = mysqli_real_escape_string($dbc, $_POST['uname']);
	
	//escape the entry again i.E RUBB
	$uname = addcslashes($uname, $chars);
	
	//same for password
	$pword = mysqli_real_escape_string($dbc, $_POST['pword']);
	
	$pword = addcslashes($pword, $chars);
	
	//build our query
	$query = "select * from customer where uname = '$uname'";
	
	//run querty
	$result = mysqli_query($dbc, $query) or die('Username read error: '.mysqli_error($dbc));
	
	//check to see if we got any rows
	if (mysqli_num_rows($result) == 0)
	{
		//username invalid yo
		header('Location: login.php?rc=1');
		exit;
	}
	
	//if we got here we can verify username
	
	//store results of query for password verification
	$row = mysqli_fetch_array($result);
	
	//salt and hash mmmm
	if (crypt($pword, $row['pword']) == $row['pword'])
	{
		//passwords match, lets do this
		session_id('user');
		session_name('user');
		session_start('user');
		$_SESSION['user'] = $row['name'];
		
		//done with dbc
		mysqli_close($dbc);
		
		header('Location: welcome.php');
		exit;
		
	}
	else
	{
		//pword invalid
		header('Location: login.php?rc=2');
		exit;
	}
	
	//pass a 3 back to login.php for testing
	//code block must stay at bottom
	header('Location: login.php?rc=3');
	exit;
?>