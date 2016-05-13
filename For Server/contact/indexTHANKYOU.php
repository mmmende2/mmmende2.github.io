<!DOCTYPE html>
   
<!--
SERVER SERER SERVER 
indexCONTACT
projectFINAL
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
    <link type="text/css" rel="stylesheet" href="projectFINAL/stylesheets/centermessage.css" />
	
	<!-- Java script tags-->
	<script type="text/javascript" src="projectFinal/js/messages.js"></script>
	

	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="projectFinal/images/favicon.ico" />
	
    <!-- Web Page Title -->
    <title>Confirm</title>

  </head>

  <body>
	<div id="wrapper"> 
		<?php include ('../php/header.php'); ?>
		
		
		
		<div id="main">
			<p class="indent">
				Thank you! :) 
				<br />
				<br />
				We will get back to you promptly.
			</p>
		</div>
		
		
		
		<div id="prefooter"></div>
		
		
		
	</div>
	<?php include('../php/footer.html'); ?>
  </body>

</html>