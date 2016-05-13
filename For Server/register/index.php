<!DOCTYPE html>
   
<!--
SERVER SERVER


projectFinal
registration
index.php
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
    <link type="text/css" rel="stylesheet" href="projectFinal/stylesheets/4registration.css" />
	
	<!-- Java script tags-->
	<script type="text/javascript" src="js/messages.js"></script>
	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="projectFinal/images/favicon.ico" />
	
	
	
	
	
    <!-- Web Page Title -->
    <title>Register</title>

  </head>

  <body>
	<div id="wrapper"> 
		<?php include ('../php/header.php'); ?>
		
		
		
		<div id="main">
			
			<p>Please complete the Registration Form on the right...</p>
			
			<p class="indent">By hitting 'Submit', we can notify you if the desired<br /> username is available.</p>
			
			
			
		</div>
		
		
		
		<form id="quoteform" action="projectFinal/php/confirmRegistration.php" method="post">
			<p>Registration Form</p>
			
			<p>
				<!-- name -->
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" 
				autofocus 
				required 
				pattern="[a-zA-Z-' ]{3,30}"
				title="Name: 3-30 characters; Upper and Lower case letters; - or ' only" 
				value="<?php echo @$_GET['name']; ?>"
				onfocus="message(this.id)"
				/>
				<br /> <!--  -->
				
				
				
				<!-- username --> <!-- set the for, id and name and name to uname -->
				<label for="uname" >Username Desired:</label>
				<input type="text" id="uname" name="uname" 
				required 
				title="Username is required; 4-15 chars; U/l chars, 0-9, and -, _, !, and $ only!"
				pattern ="[a-zA-Z0-9-_!$]{4,15}"
				onfocus="message(this.id)"
				/>
				<!--  p -->
				<br />
				
				<label for="unamechecked" class="check" >Username Checked:</label>
				<input type="text" id="unamechecked" name="unamechecked" 
				disabled
				class="checked"
				placeholder="Username Checked"
				value="<?php echo @$_GET['uname']; ?>"
				/>
				<!--  -->
				<br />
				
				<!-- username status --> 
				<label for="unamestatus" class="check" >Username Status:</label>
				<input type="text" id="unamestatus" name="unamestatus" 
				disabled
				placeholder="Username Status"
				class="checked"
				value="<?php echo @$_GET['status']; ?>"
				/>
				<!--  -->
				<br />
			
				
				
				<!-- password --><!-- set the for, id and name to pword -->
				<label for="pword">Password:</label>
				<input type="text" id="pword" name="pword" 
				required
				title="Password is required; 4-15 chars; U/l chars, 0-9, and -, _, !, and $ only!"
				pattern ="[a-zA-Z0-9-_!$]{4,15}"
				onchange="form.reenter.pattern=this.value"
				onfocus="message(this.id)"
				value="<?php echo @$_GET['pword']; ?>"
				/>
				<!--  -->
				
				<br/>
				
				<!-- re enter --><!-- set the for, id and name to pword -->
				<label for="reenter">Re-Enter Password:</label>
				<input type="text" id="reenter" name="reenter" 
				required
				title="Passwords must match" 
				onfocus="message(this.id)" 
				pattern ="[a-zA-Z0-9-_!$]{4,15}"
				value="<?php echo @$_GET['pword']; ?>"/>
				<br/>
				
				<!-- email --> <!--  -->
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" 
				required
				title="Email: valid emails only, 6-50 chars"
				pattern="[a-z0-9-_.$!]+@[a-z0-9-_.]+\.[a-z]{2,16}" 
				maxlength="50"
				onfocus="message(this.id)"
				value="<?php echo @$_GET['email']; ?>"
				/>
				<!--pattern="[a-z0-9-_.$!]+@[a-z0-9-_.]+\.[a-z]{2,16}"  -->
				
		
			    <span class="hint"><br /> Hint: <span id="jsmsgs"></span> </span>
				<div id="butelement">
				<input type="submit" value="Submit" class="buttons" />
				<input type="reset" value="Reset" 
				onclick="location.href='http://cis425a.wpcarey.asu.edu/mmmende2/projectFinal/register/index.php';"
				class="buttons" id="greybutton" />
				</div>
		</form>
		
		
		
		<div id="prefooter"></div>
		
		
	</div>
	<?php include('../php/footer.html'); ?>
  </body>

</html>