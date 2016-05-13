<!DOCTYPE html>

<!--
projectLandingPage
index.php
Spring '16
Mario Mendez 
-->



<html lang="en"> <!-- -->
  	
  <head>
	<!-- establish correct base based on URI --> 
	<!-- referencing a file basically, automate with PHP-->
	<!-- echo writes to the screen in php
		double quotes and single quotes, 
		-->
	<?php 
		if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
			echo'<base href="http://localhost/CIS425/2161-Spring/projectFinal">';
		else 
			echo'<base href="http://cis425a.wpcarey.asu.edu/mmmende2/">';
	
		
	?>
	
    <!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	
	<!--SJ -->
	
	
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="projectFinal/stylesheets/1landingImageLists.css" />
	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="images/favicon.ico" />

    <!-- Web Page Title -->
    <title>mART</title>

  </head>

  <body> 
	<div id="wrapper"> 
		<?php include ('php/header.php'); ?>
		
		
		
		
		
		
		<div id="main">
		</div>
		<br />
		<br />
		<br />
		<br />
		<br />
		
		
		
		
		<div id="imagelist" class="imagelist">
			
			<ul>
			
				<li><img src="projectFinal/images/001mendez.JPG" alt="Louvre Pyramid"></li>
				<li><img src="projectFinal/images/002mendez.JPG" alt="Centre Pompidou"></li>
				<li><img src="projectFinal/images/003mendez.JPG" alt="Chateau de Personne"></li>
				<li><img src="projectFinal/images/004mendez.JPG" alt="Fountain Thieves, Louvre Pyramid"></li>
				<li><img src="projectFinal/images/005mendez.JPG" alt="Champ De Mars"></li>
			</ul>
		</div>
		
		
		<div id="imagelist2" class="imagelist">
			<ul>
				<li><img src="projectFinal/images/001mendez.JPG" alt="Louvre Pyramid"></li>
				<li><img src="projectFinal/images/002mendez.JPG" alt="Centre Pompidou"></li>
				<li><img src="projectFinal/images/003mendez.JPG" alt="Chateau de Personne"></li>
				<li><img src="projectFinal/images/004mendez.JPG" alt="Fountain Thieves, Louvre Pyramid"></li>
				<li><img src="projectFinal/images/005mendez.JPG" alt="Champ De Mars"></li>
			</ul>
		</div>
		
		<div id="imagelist3" class="imagelist">
			<ul>
				<li><img src="projectFinal/images/001mendez.JPG" alt="Louvre Pyramid"></li>
				<li><img src="projectFinal/images/002mendez.JPG" alt="Centre Pompidou"></li>
				<li><img src="projectFinal/images/003mendez.JPG" alt="Chateau de Personne"></li>
				<li><img src="projectFinal/images/004mendez.JPG" alt="Fountain Thieves, Louvre Pyramid"></li>
				<li><img src="projectFinal/images/005mendez.JPG" alt="Champ De Mars"></li>
			</ul>
		</div>
		
		<div id="imagelist4" class="imagelist">
			<ul>
				<li><img src="projectFinal/images/001mendez.JPG" alt="Louvre Pyramid"></li>
				<li><img src="projectFinal/images/002mendez.JPG" alt="Centre Pompidou"></li>
				<li><img src="projectFinal/images/003mendez.JPG" alt="Chateau de Personne"></li>
				<li><img src="projectFinal/images/004mendez.JPG" alt="Fountain Thieves, Louvre Pyramid"></li>
				<li><img src="projectFinal/images/005mendez.JPG" alt="Champ De Mars"></li>
			</ul>
		</div>
		
		
		<div id="prefooter">
		</div>
		
		
		
		
		     
	
  </div>
  <script src="projectFinal/js/slideshow.js" ></script>
  <?php include('php/footer.html'); ?>
  </body>

</html>