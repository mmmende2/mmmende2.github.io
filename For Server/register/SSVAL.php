<!DOCTYPE html>
   
  
<!--
server server server 
SSVAL
425
Mario Mendez
-->


<html lang="en">
  	
  <head>
	<?php 
		if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
		{
			echo'<base href="http://localhost/CIS425/2161-Spring/projectFinal">';
			include('../connect/local-connect.php');
		}	
		
		else 
		{
			echo'<base href="http://cis425a.wpcarey.asu.edu/mmmende2/projectFinal">';
			include('../connect/server-connect.php');
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
	<div id="wrapper"> 
		<?php include ('../php/header.php'); ?>
		
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
				pleasse click <a href="a7/">here</a> to treturn to the regggie formf burh file in register folder
				
			</p>
		</div>

		<?php include('../php/footer.html'); ?>
	</div>

  </body>

</html>