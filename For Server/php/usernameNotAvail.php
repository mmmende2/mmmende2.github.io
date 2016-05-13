<!DOCTYPE html>
   
  
<!--
SERVER SERVER SERVER
projectFinal
usernameNotAvail.php
425
Mario Mendez
-->


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
			echo'<base href="http://cis425a.wpcarey.asu.edu/mmmende2/projectFinal">';
			include('../connect/server-connect.php');
		}
	?>
	
    <!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="../stylesheets/3services.css" />
	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="./images/favicon.ico" />
	
    <!-- Web Page Title -->
    <title>Not Available</title>

  </head>

  <body>
	<div id="wrapper"> 
		<?php include ('header.php'); ?>
		
		<div id="main">
			<p>Sorry BRUH
			</p>
			<p>Username [<span class="red"><?php echo @$_GET['uname'] ?></span>]
			</p>
			<p>Is unavailable
			</p>
			<p>Please click <a href="checkUsername.php">HERE</a> to see if your desired username is available,
				or click <a href="#">HERE</a> to return to the Registration form to try again.
				</p>
		</div>
		
		<div id="prefooter"></div>
		
		<?php include('footer.html'); ?>
		
	</div>

  </body>

</html>