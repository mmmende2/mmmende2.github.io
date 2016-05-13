<?php
	//projectFinal
	//uncheck.php
	//spring 2016
	//deande
	
	//connect to DB local or server
	 //cgabged to serverinclude('../connect/server-connect.php'); removed that
	include('../connect/local-connect.php');
	
	//variable for addcslashes
	$chars = '_%';
	
	//get username from html 
	$uname = mysqli_real_escape_string($dbc, $_POST['uname']); 
	 
	
	
	//esacpae it again for the chars real esacpe string that it misses
	$work = addcslashes($uname, $chars);
	
	//build and execute query
	$check = mysqli_query($dbc, "select id from customer where uname = '$work'");
	
	//verify unique 
	if (mysqli_num_rows($check) == 0)
	{
		//didn't fint he uname, so its unqiue
		
		include('confirmRegistrationPHP.php');
		include('confirmRegistrationNO.php');
		exit;
		
		
		//header("Location: http://cis425a.wpcarey.asu.edu/mmmende2/projectFinal/register/index.php?&name=$name&pword=$pword&email=$email&uname=$uname&status=AVAILABLE");
		//header("Location: http://cis425a.wpcarey.asu.edu/mmmende2/php/confirmRegistrationNO.php");
		//header("Location: index.php?&uname=$uname&status=AVAILABLE");
		
		
	}
	else
	{
		header("Location: http://cis425a.wpcarey.asu.edu/mmmende2/projectFinal/register/index.php?&name=$name&pword=$pword&email=$email&uname=$uname&status=UNAVAILABLE");
		
	}
		
	//clsoe connection to db Location: http://localhost/CIS425/2161-Spring/projectFINAL/register/
	
	//mysqli_close($dbc); try not closing???
 


?>