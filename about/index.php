<!DOCTYPE html>
   
  
<!--
about
index.php
projectFinal
425
Mario Mendez
-->


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
    <link type="text/css" rel="stylesheet" href="projectFinal/stylesheets/7about.css" />
	
	<!-- Java script tags-->
	<script type="text/javascript" src="js/messages.js"></script>
	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="./images/favicon.ico" />
	
    <!-- Web Page Title -->
    <title>Services</title>

  </head>

  <body>
	<div id="wrapper">
		<?php include ('../php/header.php'); ?>
		
		<div id="main">
			<br />
			<img src="projectFinal/images/theteam.jpg" alt="theteam" id="theteam">
			<br />
			<br />
			<br />
			<br />
			
		</div>
		
		
		<div id="rightelement"> <!--probably going to want to change this to a div-->
			<p>
				<div id="martText">Mart</div>
				<div id="martTextRight">is artist Mario Mendez's online art store and gallery space.</div>
				<br />
				<br />
				<br />
				<br />
				<p class="indent">Our Mission is to cultivateand expand The Valley's fine art scene by exhibiting 
				and showcaing emerging artists. Our goal is to create an environment that encourages the community
				to interact with artists and vice versa, by selling and displaying art. 
				</p>
				
				<p class="indent">From expensive, editioned, and one-of-a-kind fine art to small, <br /> 
				mass made collectible items and machine prints, we have something for everyone!
				<p class="indent">
				The site also serves as a way to request photographic services from Mario Mendez. All procceds go directly to the credited artist unless otherwise noted. 
				<br /></p>
				<h3>Stay, take a look, and enjoy. </h3>
				<p class="indent">
					- The Team 
					<br />
					<span class="hint">(From left to right; Mario M. Mendez, Liz Allen, Christine Beatty, Kidist Abate)</span>
				</p>
			
		</div>
		
		
		
		<div id="prefooter">
		</div>
		
		
		
	
	</div>
	<?php include('../php/footer.html'); ?>
  </body>

</html>