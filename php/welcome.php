<!DOCTYPE html>
   
<!--
welcome
projectFinal
425
Mario Mendez
-->


<?php
	//this is where the php session starts
	session_id('user');
	session_name('user'); //sooo the login page had single quotes...
	session_start('user');
	
	//check to see if user is already logged in
	if(!isset($_SESSION['user']))
	{
		//they aren't logged in so do it
		header('Location: login.php');
		exit;
		
	}

?>

<html lang="en">
  	
  <head>
	<?php 
		if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
		{
			echo'<base href="http://localhost/CIS425/2161-Spring/projectFinal">';
			include('../connect/local-connect.php');
		}	
		else 
		{
			echo'<base href="http://cis425a.wpcarey.asu.edu/mmmende2/">';
			include('../connect/server-connect.php');
		}
			
	
	?>
	
    <!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="projectFINAL/stylesheets/centermessage.css" />
	
	<!-- Java script tags-->

	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="./images/favicon.ico" />
	
    <!-- Web Page Title -->
    <title>Welcome :)</title>

  </head>

  <body>
	<div id="wrapper"> 
		<?php include ('../php/header.php'); ?>
		
		
		
		<div id="main">
		
			<p class="indent">Hello! You are logged in as 
				<span class="highlightText"><?php echo $_SESSION['user']; ?></span>. 
			</p>
			
			<p>Don't forget to logout when you are done :)
			</p>
		</div>
		
		<div id="prefooter"></div>
		
		
		
	</div>
	<?php include('../php/footer.html'); ?>
  </body>

</html>