<!DOCTYPE html>
   
  
<!--

SERVER SERVER SERVER

ssval
iprojectfinal
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
    <link type="text/css" rel="stylesheet" href="projectFinal/stylesheets/centermessage.css" />
	
	
	
	<!-- Favicon tag WHY DO I HAVE TO PUT THE FINAL SHIT -->
	<link type="image/gif" rel="icon" href="projectFinal/images/favicon.ico" />
	
	
	
    <!-- Web Page Title -->
    <title>Mendez ssval</title>

  </head>

  <body>
	<div id="wrapper"> <!--divs are sections of code where you apply style -->
		<?php include ('header.php'); 
						?>
		
		
		<!-- you want to style? Make it a div block 
					any line level needs a damn blok-->
		<div id="main">
			<p class="highlightText"> *** ERROR *** </p>
			<p class="indent">
				your entry of [ <?php echo @$_GET['work'] ?> ]
				<br />
				in the [ <?php echo @$_GET['field'] ?> ]
				field failed server-side validation
			</p>
			<p>
				Click <a href="projectFinal/register/">here</a> to return to the registration form
				<br/>
				or use your browsers back button to retain entered fields.
			</p>
		</div>
		
		
		<div id="prefooter"></div>
		
		
		
	
	</div>
	<?php include('footer.html'); ?>
  </body>

</html>