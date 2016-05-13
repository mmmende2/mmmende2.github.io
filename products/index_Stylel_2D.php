<!DOCTYPE html>

<!--
style 2d
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
    <link type="text/css" rel="stylesheet" href="projectFinal/stylesheets/10ProdGal_Style.css" />
	
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
		</div>
		
		<h1 class="indentMore">2D Artwork</h1>
		
		<div id="imagelist2" class="imagelist">
			<ul>
				<li>
					<div class="imageContainer">
						<a href="projectFinal/products/index_ArtisDetail_Mario_Paris.php">
						<img src="projectFinal/images/005mendez.JPG" alt="Feed Me">
						<div class="imageContainerText"><p>Paris in Black</p> 
						</div>
						</a>
					</div>
				</li>
				<li>
					<div class="imageContainer">
						<a href="projectFinal/products/index_ArtisDetail_Mario_Color.php">
						<img src="projectFinal/images/001_colorBanner.JPG" alt="Artist Miguel">
						<div class="imageContainerText"><p>Study in Color</p>
						</div>
						</a>
					</div>
				</li>

			</ul>
		</div>
		<div id="prefooter">
		</div>
	
  </div>
  <?php include('../php/footer.html'); ?>
  </body>

</html>