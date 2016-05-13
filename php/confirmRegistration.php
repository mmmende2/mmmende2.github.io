<!DOCTYPE html>

<!--
projectFinal
confirm.php
425
Mario Mendez

-->
<?php
	include('uncheck.php');
	
?>

<html lang="en">
  	
  <head>
	<?php 
		if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
		{
			echo'<base href="http://localhost/CIS425/2161-Spring/projectFinal">';
			
		}	
		else 
		{
			echo'<base href="http://cis425a.wpcarey.asu.edu/mmmende2/projectFinal">';
			
		}
			
	
	?>
	
	
    <!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="projectFinal/stylesheets/centermessage.css" />
	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="projectFinal/images/favicon.ico" />
	
    <!-- Web Page Title -->
    <title>Confirmation</title>

  </head>

  <body>
	<div id="wrapper"> 
	
		<?php 
			include ('header.php'); 
			
			
			
		?>

	
		
		<div id="main">
		
			<!--CLEM -->
			<p class="highlight">
			<?php
				$time = date("G");
				if ($time < "12")
				{
					echo 'Good morning ' . $oname . '! ';
					
				}
				else if ($time < '17')
				{
					echo 'Good afternoon ' . $oname . '! ';					
				}
				else 
				{
					echo 'Good evening ' . $oname . '! ';
					 
				}
			
			?>
			</p>
			
			
			<p class="indent">Thank you for joining</p>
			
			<p>Feel free to browse the rest of my site</p>
		</div>
		
		<div id="prefooter"></div>
		
		
		
	</div>
	<?php include('footer.html'); ?>
  </body>

</html>