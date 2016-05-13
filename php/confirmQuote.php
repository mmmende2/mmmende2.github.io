<!DOCTYPE html>
<!--
projectFinal
confirm.php
425
Mario Mendez
-->
<?php
	include('../connect/local-connect.php'); //was local connect
	include('confirmQuotePHP.php');  //was just confirmQuotePHP.php, that works locally
	
?>



<html lang="en">
  	
  <head>
	<?php 
		if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
			echo'<base href="http://localhost/CIS425/2161-Spring/projectFinal">';
		else 
			echo'<base href="http://cis425a.wpcarey.asu.edu/mmmende2/">';
	
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
		<?php include ('header.php'); ?>
		
		<div id="main">
			<p class="highlight">
			<?php
				$time = date("G");
				if ($time < "12")
				{
					echo 'Good Morning! ' . $oname;
					
				}
				else if ($time < '17')
				{
					echo 'Good Afternoon ' . $oname;					
				}
				else 
				{
					echo 'Good Evening ' . $oname;
					
				}
			
			?>
			</p>
			
			
			<p class="indent">Thank you for your interest</p>
			
			<p>My team will get back to you as soon as we can.</p>
		</div>
		
		<div id="prefooter"></div>
		
		
		
	</div>
	<?php include('footer.html'); ?>
  </body>

</html>