<!DOCTYPE html>

<!--
artist detail Miguel Cyanotee
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
			echo'<base href="http://cis425a.wpcarey.asu.edu/mmmende2/projectFinal">';
	
	
	
	?>
	
    <!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="projectFinal/stylesheets/11ProdGal_ArtistDetailSlideshowMOD.css" />
	
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
		
		
		<h1><i>CyanaTee</i> by Miguel</h1>
		</div>
		<div id="slideShow">
			  <div class="slide">
				<img src="projectFinal/images/dd_1234.png" alt="CyanaTee">
			 </div>
			 <div class="slide">
				<img src="projectFinal/images/wtf1.JPG" alt="In Progress">
			 </div>
			 <div class="slide">
				<img src="projectFinal/images/wtf2.JPG" alt="Cyanotype Solution">
			 </div>
			 <div class="slide">
				<img src="projectFinal/images/dd_1234.png" alt="CyanaTee">
			 </div>
			 
		</div>
		
		<div id="artistStatement">
		<h4><i>About the work:</i></h4>
		<p class="indent">
		This shirt was grown from cotton planted in the Earth that flourished with the suns energy. The design, is a solution of chemicals composed of iron, one of the most abundant element on the planet. The solution reacts to nature’s principal energy source, ultra violet radiation, and leaves distant copies of the former objects. Made from the universe's primordial building blocks, etched by the energy of light, and engendered by one of the universe’s many complex living organisms; a human. The three unique organic shapes on this shirt represent theses three forces; substance, drive, and creativity. Due to the nature of the cyanotype process, these objects cannot be reused. The dried leaves and dead organic material not only give themselves to the design but simultaneously make each shirt distinct and individual much like the inventiveness of nature. 
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