<!DOCTYPE html>

<!--
artist detail mario's colro
PRODUCT
index.php
Spring '16
Mario Mendez 
-->



<html lang="en"> <!-- -->
  	
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
		
		
		<h1><i>A Study in Color</i> by Mario Mendez</h1>
		</div>
		<div id="slideShow">
			 <div class="slide">
				<img src="projectFinal/images/000_Colorvert1.PNG" alt="Paris Metro">
			  </div>
				 <div class="slide">
				<img src="projectFinal/images/000_Colorvert.PNG" alt="Lady Guadalupe Mexico City">
			  </div>
			 <div class="slide">
				<img src="projectFinal/images/003_color.JPG" alt="Haji Sophia, Istanbul">
			  </div>
			 <div class="slide">
				<img src="projectFinal/images/004_color.JPG" alt="Oia Greece">
			 </div>
			 <div class="slide">
				<img src="projectFinal/images/005_color.JPG" alt="Brussels">
			  </div>
			  <div class="slide">
				<img src="projectFinal/images/006_color.JPG" alt="Manhattan Beach L.A.">
			 </div>
			 <div class="slide">
				<img src="projectFinal/images/007_color.JPG" alt="Versailles">
			  </div>
			  <div class="slide">
				<img src="projectFinal/images/008_color.JPG" alt="Delphi Greece">
			 </div>
			 <div class="slide">
				<img src="projectFinal/images/009_color.JPG" alt="Brussels">
			  </div>
			  <div class="slide">
				<img src="projectFinal/images/010_color.JPG" alt="Tulum City Mexico">
			 </div>
			 <div class="slide">
				<img src="projectFinal/images/011_color.JPG" alt="Santorini Greece">
			  </div>
			  <div class="slide">
				<img src="projectFinal/images/012_color.JPG" alt="Athens Greece">
			 </div>
			 
		</div>
		
		<div id="artistStatement">
		<h4><i>About the work:</i></h4>
		<p class="indent">
		This small body of street photography encompasses a decade of my life, and spans six different countries. It is part of a much larger body of work, spanning many more countries, locations, and demographics. It is a body of work that I will carry with me, and continue to expand on, indefinitely. Theses images are snapshots, like a passing thought, brief, fleeting, but one of many. There is no end to observing and consuming the stimulus the world has to offer.
The string of consciousness I hope to invoke revolves around humor, excitement, pleasure, irony, wit, fascination, and wonder. It evokes the child inside me, which as I age, I try harder to retain. Our world is depressing, and wrought with injustices, but this Shakespearean tragedy is not without it’s comedy. 

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