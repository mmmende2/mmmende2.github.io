<!DOCTYPE html>
   
<!--
login
projectFINAL
425
Mario Mendez
-->


<?php
	//this is where the php session starts
	session_id('user');
	session_name('user');
	session_start('user');
	
	//check to see if user is already logged in
	if(isset($_SESSION['user']))
	{
		//fuck off
		header('Location: welcome.php');
		exit;
		
	}

?>

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
    <link type="text/css" rel="stylesheet" href="projectFinal/stylesheets/4registration.css" />
	
	<!-- Java script tags-->

	<script type="text/javascript" src="js/messages.js"></script>

	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="images/favicon.ico" />
	
    <!-- Web Page Title -->
    <title>Log In</title>

  </head>

  <body>
	<div id="wrapper"> 
		<?php include ('/header.php'); ?>
		
		
		
		<div id="main">
			<p class="indent">
				
				<span class="bold">Enter</span> your Username and Password to Login...
				<br />
				<br />
				Or create an account <a href="projectFinal/register/index.php" >here</a>. 
			</p>
		</div>
		
		
		<form id="quoteform" action="projectFinal/php/process.php" method="post">
			<p>Login Form</p>
			
			
				<?php
					//check the retun code from process.php 
					if(isset($_GET['rc']))
					{
						if($_GET['rc'] == 1)
							echo '<p class="highlightText">*** Invalid Username ***</p>';	
						if($_GET['rc'] == 2)
							echo '<p class="highlightText">*** Invalid Password ***</p>';	
						if($_GET['rc'] == 3)
							echo '<p class="highlightText">Returned from process.php...</p>';
					}
				
				?>
			<p>
				<!-- username --> <!-- set the for, id and name and name to uname -->
				<label for="uname">Username:</label>
				<input type="text" id="uname" name="uname" 
				autofocus
				required 
				title="Username is required; 4-15 chars; U/l chars, 0-9, and -, _, !, and $ only!"
				pattern ="[a-zA-Z0-9-_!$]{4,15}"
				onfocus="message(this.id)"
				/>
				<!--  -->
				<br />
				
				
				<!-- password --><!-- set the for, id and name to pword -->
				<label for="pword">Password:</label>
				<input type="password" id="pword" name="pword" 
				required
				title="Password is required; 4-15 chars; U/l chars, 0-9, and -, _, !, and $ only!"
				pattern ="[a-zA-Z0-9-_!$]{4,15}"
				onfocus="message(this.id)"
				
				/>
				<!-- onchange="form.reenter.pattern=this.value" -->
				
				
			</p>
				
				<span class="hint" >Hint: <span id="jsmsgs"></span> </span>
				<br />
				<br />
				<div id="butelement">
				<input type="submit" value="Submit" class="buttons" />
				<input type="reset" value="Reset" 
				onclick="location.href='http://localhost/CIS425/2161-Spring/projectFinal/php/login.php';"
				class="buttons" id="greybutton" />
				</div>
			
		</form>
		
		
		<div id="prefooter"></div>
		
		
		
	</div>
<?php include('/footer.html'); ?>
  </body>

</html>