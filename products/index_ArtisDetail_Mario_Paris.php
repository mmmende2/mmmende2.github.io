<!DOCTYPE html>

<!--
PRODUCT
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
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="projectFinal/stylesheets/11ProdGal_ArtistDetailSlideshow.css" />
	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="images/favicon.ico" />

    <!-- Web Page Title -->
    <title>Gallery</title>

  </head>

  <body> 
	<div id="wrapper"> 
		<?php include ('../php/header.php'); ?>
		
		<div id="main">
			<p class="nav">Browse by 
			<a href="projectFinal/products/index.php" id="artist">Artist</a>, 
			<a href="projectFinal/products/indexColor.php" id="color">Color</a>, 
			<a href="projectFinal/products/index_Style.php" id="style">Style & Size</a>
			</p>
		
		
		<h1><i>Paris In Black</i> by Mario Mendez</h1>
		</div>
		<div id="slideShow">
			  <div class="slide">
				<img src="projectFinal/images/001mendez.JPG" alt="Paris in Black">
			 </div>
			 <div class="slide">
				<img src="projectFinal/images/002mendez.JPG" alt="Paris in Black">
			 </div>
			 <div class="slide">
				<img src="projectFinal/images/003mendez.JPG" alt="Paris in Black">
			  </div>
			 <div class="slide">
				<img src="projectFinal/images/004mendez.JPG" alt="Paris in Black" >
			 </div>
			 <div class="slide">
				<img src="projectFinal/images/005mendez.JPG" alt="Paris in Black">
			  </div>
		</div>
		
		<div id="artistStatement">
		<h4><i>About the work:</i></h4>
		<p class="indent">
		This specific body of work is a homage to the great street photographers of the 20th century. 
		Shot on film, processed, and printed in his own darkroom, Mendez exclusively uses 20th century photographic techniques to highlight the city in which street photography was born. 
		The use of medium format film and sweeping scenes begs the viewer to come in closer, permitting one to become apart of the moment captured in time.  
		</p>
		
		<form action="projectFinal/cart/index.php" class="indent">
			<input type="submit" class="greybutton" value="Shop Artwork" >
		</form>
		<p><br /></p>
		
		<br />
		
		</div>
		<div id="prefooter">
		</div>
		<!--SJ  HAS TO BE IN BODY WHY?-->
		<script src="projectFinal/js/slideshow.js" ></script>
	
  </div>
  <?php include('../php/footer.html'); ?>
  </body>

</html>