<!DOCTYPE html>
   
<!--
projectFinal
checkUsername.php
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
			echo'<base href="http://cis425a.wpcarey.asu.edu/mmmende2/">';
			include('../connect/server-connect.php');
		}
			
	
	?>
	
    <!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="projectFinal/stylesheets/3services.css" />

	<script type="text/javascript" src="./js/messages.js"></script>
	<!-- Favicon tag <script type="./js/messages.js" />-->
	<link type="image/gif" rel="icon" href="./images/favicon.ico" />
	
    <!-- Web Page Title -->
    <title>Mendez A7</title>

  </head>

  <body>
	<div id="wrapper"> 
		<?php include ('header.php'); ?>
		
		
		
		<div id="main">
			<p class="bold">
				Enter your desired Username below and we'll tell you if it's available!
			</p>
			<p>
				Please click <a href="#">HERE</a> to return to the Registration Form
			</p>
		</div>
		
		
		<form id="regform" action="projectFinal/php/uncheck.php" method="post">
			<p>Username Check</p>
			
			<p>
				
				
				<!--CHECK username --> <!-- set the for, id and name and name to uname -->
				<label for="uname">Username to check:</label>
				<input type="text" id="uname" name="uname" 
				autofocus
				required 
				title="Username is required; 4-15 chars; U/l chars, 0-9, and -, _, !, and $ only!"
				pattern ="[a-zA-Z0-9-_!$]{4,15}"
				onfocus="message(this.id)"
				placeholder="Username to check"
				/>
				<!--  -->
				<br />
				
				<!-- username CHECKED --> 
				<label for="unamechecked">Username Checked:</label>
				<input type="text" id="unamechecked" name="unamechecked" 
				disabled
				placeholder="Username Checked"
				value="<?php echo @$_GET['uname']; ?>"
				/>
				<!--  -->
				<br />
				
				<!-- username status --> 
				<label for="unamestatus">Username Checked:</label>
				<input type="text" id="unamestatus" name="unamestatus" 
				disabled
				placeholder="Username Status"
				value="<?php echo @$_GET['status']; ?>"
				/>
				<!--  -->
				<br />
			
				
				
			<p class="submit">
				<input type="submit" value="CHECK" /> 
			</p>
		</form>
		<div id="prefooter"></div>
		<p id="jsmsgs"></p>
		<?php include('footer.html'); ?>
		
	</div>

  </body>

</html>