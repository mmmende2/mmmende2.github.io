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
	<base href="http://mmmende2.github.io/">
	
    <!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	
	
	
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="stylesheets/1landing.css" />
	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="images/favicon.ico" />

    <!-- Web Page Title -->
    <title>mART</title>

  </head>

  <body> 
	<div id="wrapper"> 
		<?php include ('php/header.php'); ?>
		<div id="main">
		<div id="slideShow">
			<a href="#">
				<div class="slide">
				  <img src="images/001_landingslide.JPG" alt="welcomeimg">
				</div>
			</a>
			<a href="products/index_ArtistDetail_Miguel.php">
				  <div class="slide">
					<img class="opaque" src="images/bannerFeedme.JPG" alt="advert2" >
					<div class="imageTextTop">New Artist...</div>
					<div class="imageTextBottom" id="newArtist" ><span class="martText">Miguel</span></div>
				  </div>
			</a>
			<a href="products/index_ArtisDetail_Mario_Color.php">
				 <div class="slide">
					
					<img class="opaque" src="images/bannerStreet.JPG" alt="advert3" >
					<div class="imageTextTop">New art from...</div>
					<div class="imageTextBottom"><span class="martText">Mario Mendez</span></div>
				  </div>
			</a>
			<a href="products/index_ArtisDetail_Miguel_Cyano.php">
				 <div class="slide">
					<img src="images/005_landingslide.JPG" alt="advert4" >
					
					<div class="imageTextCenter">50%</div>
					<div class="imageTextBottom"><span class="martText">off all shirts</span></div> 
				  </div>
			</a>
		</div>
		
		<div id="prefooter">
		</div>
		<!--SJ  HAS TO BE IN BODY WHY?-->
		<script src="js/slideshow.js" ></script>	
  </div>
  </div>
  
  <?php include('php/footer.html'); ?>
  </body>

</html>
