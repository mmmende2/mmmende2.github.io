<!DOCTYPE html>
   
  
<!--
ssval
index4.php
425
Mario Mendez
-->


<html lang="en">
  	
  <head>
	<?php 
		if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
		{
			echo'<base href="http://localhost/CIS425/2161-Spring/">';
			include('../connect/local-connect.php');
			
			
			
			
		}	
		
		else 
		{
			echo'<base href="http://cis425a.wpcarey.asu.edu/mmmende2/">';
			include('../connect/local-connect.php');
			
			
			
			
		}
			
	
	?>
	
    <!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="./stylesheets/a7ss.css" />
	
	
	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="./images/favicon.ico" />
	
	
	
    <!-- Web Page Title -->
    <title>Mendez ssval</title>

  </head>

  <body>
	<div id="wrapper"> <!--divs are sections of code where you apply style -->
		<?php include ('../php/header.php'); 
						?>
		
		
		<!-- you want to style? Make it a div block 
					any line level needs a damn blok-->
		<div id="wrapper">
			<p class="bold"> ** ERROR ** </p>
			<p>
				your entry of [<span class="red">
				<?php echo @$_GET['work'] ?></span> ]
				in the [<span class="red">
				<?php echo @$_GET['field'] ?></span> ]
				field failed server-side validation
			</p>
			<p>
				pleasse click <a href="a7/">here</a> to treturn to the regggie formf burh
			</p>
		</div>
		
		
		
		
		<?php include('../php/footer.html'); ?>
		
				<!-- is the file where you said it is? add the ../ to send it up -->
		        


				<!--php time, starts with less than and a questions, ends with question greater thana  -->
	
	</div>

  </body>

</html>