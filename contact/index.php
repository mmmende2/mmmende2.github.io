<!DOCTYPE html>
   
<!--
indexCONTACT
projectFINAL
425
Mario Mendez

wont work since using webapp4s from ASUY

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
    <link type="text/css" rel="stylesheet" href="projectFINAL/stylesheets/5contact.css" />
	
	<!-- Java script tags-->
	<script type="text/javascript" src="projectFinal/js/messages.js"></script>
	

	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="projectFinal/images/favicon.ico" />
	
    <!-- Web Page Title -->
    <title>Contact</title>

  </head>

  <body>
	<div id="wrapper"> 
		<?php include ('../php/header.php'); ?>
		
		
		
		<div id="main">
			<p class="indent">
				
				Pease enter your name, email, and any comments.
				<br />
				<br />
				To succesfully SEND you must enter all fields. 
			</p>
		</div>
		
		
		<form id="quoteform" action="mailto:mario@mariomendezphotography.com" method="post">
			<p>Contact Form</p>
			
			
				
			<p>
			
				<!-- 3 hidden elements to process SMTP mail, san.lai@asu.edu SAN SAN needs email --> 
				
														<!-- Dennis.Anderson@asu.edu -->
				<input type="hidden" name="sendto" value="mario@mariomendezphotography.com" />
				<input type="hidden" name="subject" value="Mart Site Comments:" /> 
				<input type="hidden" name="location"
				value="http://cis425a.wpcarey.asu.edu/mmmende2/projectFinal/contact/indexTHANKYOU.php" />
				
				<!-- name -->
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" 
				autofocus 
				required 
				title="Name: 3-30 characters; Upper and Lower case letters; - or ' only"
				pattern="[a-zA-Z-' ]{3,30}"
				onfocus="message(this.id)"
				/>
				<br />
				
				<!-- email --> <!--  -->
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" 
				required
				title="Email: valid emails only, 6-50 chars"
				pattern="[a-z0-9-_.$!]+@[a-z0-9-_.]+\.[a-z]{2,16}"
				maxlength="50"
				onfocus="message(this.id)"
				/>
				
				<br/>
				
				<!-- Comments -->
				<label for="comments">Comments:</label>
				<textarea id="comments" name="comments"
					rows="3" cols="4"
					required
					title="If you can't fill out this field you have no business sending me an email"
					maxlength="500"
					onfocus="message(this.id)"></textarea> 
					
					
					
			</p>
				<span class="hint" >Hint: <span id="jsmsgs"></span> </span>
				<br />
				<br />
				<div id="butelement">
				<input type="submit" value="Submit" class="buttons" />
				<input type="reset" value="Reset" 
				onclick="histor.go(0)"
				class="buttons" id="greybutton" />
				</div>
			
		</form>
		
		<div id="prefooter"></div>
		
		
		
	</div>
	<?php include('../php/footer.html'); ?>
  </body>

</html>