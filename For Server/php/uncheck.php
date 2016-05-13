<?php
//SERVER SERVER SERVER
//mario you will probaly have trouble iwht line 
	//projectFinal
	//uncheck.php
	//spring 2016
	//deande
	
	//connect to DB local or server
	include('../connect/server-connect.php');
	
	//variable for addcslashes
	$chars = '_%';
	
	//get username from html 
	$uname = mysqli_real_escape_string($dbc, $_POST['uname']); 
	 
	$name = mysqli_real_escape_string($dbc, $_POST['name']); 
	
	$pword = mysqli_real_escape_string($dbc, $_POST['pword']); 
	
	$email = mysqli_real_escape_string($dbc, $_POST['email']); 
	
	//esacpae it again for the chars real esacpe string that it misses
	$work = addcslashes($uname, $chars);
	
	//build and execute query
	$check = mysqli_query($dbc, "select id from customer where uname = '$work'");
	
	//verify unique 
	if (mysqli_num_rows($check) == 0)
	{
		//didn't fint he uname, so its unqiue
		
		include('projectFinal/php/confirmRegistrationPHP.php');
		header("Location: index.php?&uname=$uname&status=AVAILABLE");

//changed from check username to 		
	}
	else
	{
		header("Location: index.php?&name=$name&pword=$pword&email=$email&uname=$uname&status=UNAVAILABLE");
		mysqli_close($dbc);
	}
		
	//clsoe connection to db
	




?>