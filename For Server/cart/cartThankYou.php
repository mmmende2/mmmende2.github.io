<!DOCTYPE html>
   


<!--
SERVER SERVER SERVER

projectFinal
confirm.php
425
Mario Mendez
-->

<!-- server stuffs --> 
<?php
	include('../connect/server-connect.php');
	
	
?>



<html lang="en">
  	
  <head>
	<?php 
		if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
			echo'<base href="http://localhost/CIS425/2161-Spring/projectFinal">';
		else 
			echo'<base href="http://cis425a.wpcarey.asu.edu/mmmende2/projectFinal">';
	
	?>
	
    <!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="projectFinal/stylesheets/centermessage.css" />
	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="projectFinal/images/favicon.ico" />
	
    <!-- Web Page Title -->
    <title>Confirmation</title>

  </head>

  <body>
	<div id="wrapper"> 
		<?php include('../php/header.php'); ?>
		
		<div id="main">
			<p class="highlight">
			Thank You :)
			</p>
			
			
			<p class="indent">Thank you for your business</p>
			
			<p>My team will process your order as soon as we can.</p>
		</div>
		
		<div id="prefooter"></div>
		
		
		
	</div>
	<?php include('../php/footer.html'); ?>
  </body>

</html>