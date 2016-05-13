<!DOCTYPE html>
   
  
<!--
services
index.php
425
Mario Mendez
-->


<html lang="en">
  	
  <head>
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
    <link type="text/css" rel="stylesheet" href="projectFinal/stylesheets/3services.css" />
	
	<!-- Java script tags-->
	<script type="text/javascript" src="js/messages.js"></script>
	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="./images/favicon.ico" />
	
    <!-- Web Page Title -->
    <title>Services</title>

  </head>

  <body>
	<div id="wrapper">
		<?php include ('../php/header.php'); ?>
		
		<div id="main">
			<p class="indent">
				Please fill out the form to the right, and my team will get back to you. <br>
				Rates differ from project to project, generally rates are as follows: <br> </p>
				<table class="shootertable" >
					<tr>
						<td>Shooting<span class="highlight">*</span></td>
						<td>100/hour</td>
					</tr>
					<tr class="specialspace">
						<td>Editing</td>
						<td>30/hour</td>
					</tr>
				</table>
			<p class="indent">
				<span class="highlight">*</span> Remember that prices include use and rental of my equipment, <br />
				professional expertise, skills, and time.
				
			</p>
			
				
			
		</div>
		
		
		<form id="quoteform" action="projectFinal/php/confirmQuote.php" method="post"> <!--action="process/confirm7.php" -->
			<p>Quote Request Form</p>
			<!--
			
			-->
			
			<p>
				<!-- name -->
				<label for="name">Name:</label>
				
				<input type="text" id="name" name="name" 
				autofocus 
				title="2-30 characters; Upper and Lower case letters; - or ' only" 
				placeholder="John Doe"
				pattern="[a-zA-Z-' ]{2,30}"
				required
				onfocus="message(this.id)"				
				/>
				<br /> <!-- -->
				
				<!-- company --> <!-- was UNAME -->
				<label for="company">Company (optional):</label>
				<input type="text" id="company" name="company"
				placeholder="Your Company LLC"
				title="1-30 chars; U/l characters, 0-9, . , -, !, and $ only!"
				pattern ="[a-zA-Z0-9-!$. ]{1,30}"
				onfocus="message(this.id)"
				/>
				<!--  -->
				<br />
				
				<!-- uname --> <!-- -->
				<label for="uname">Username (optional):</label>
				<input type="text" id="uname" name="uname"
				placeholder="deande"
				title="1-15 chars; U/l characters, 0-9, -, _, !, and $ only!"
				pattern ="[a-zA-Z0-9-_!$ ]{1,15}"
				onfocus="message(this.id)"
				/>
				<!--  -->
				<br />
				<!-- email --> <!--  -->
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" 
				placeholder="youremail@email.com"
				title="Valid emails only, 6-50 chars"
				pattern="[a-z0-9-_.$!]+@[a-z0-9-_.]+\.[a-z]{2,16}"
				maxlength="50"
				required
				onfocus="message(this.id)"
				/>
				<!--  -->
				
				<br/>
				
				<!-- PHONE --> <!--  -->
				<label for="phone">Phone:</label>
				<input type="tel" id="phone" name="phone" 
				placeholder="4802224444"
				title="No international lines, numerals only, no characters"
				pattern="[0-9]{10}"
				required
				onfocus="message(this.id)"
				/>
				
				
				<br/>
				
				<!-- Date -->
				<label for="date">Date or Deadline: </label>
				<input type="date" id="date" name="date"
				title="the day in question"
				/> <!--doesn't make a dif, validation happens with -->
							<!-- pattern="[0-9]{4}+-[0-9]{2}+-[0-9]{2}" -->
				<br/>
				
				<!-- prohation -->
				<label for="rush">Urgent</label>
				<input type="checkbox" id="rush" name="rush" value="yes"
				title="prices will reflect rush rates"
				onfocus="message(this.id)"
				/>
				<br />
				
				<!-- purpose commerical -->
				<!-- radio buttons here--> 
				<label for="purpose">Type of use?</label>
				Personal<input type="radio" id="purpose" name="purpose" value="personal"
				title="if the sevices are used for marketing or to sell, it is commercial" 
				onfocus="message(this.id)"
				checked />
				Commercial<input type="radio" id="purpose2" name="purpose" value="commercial"
				title="if the sevices are used for marketing or to sell, it is commercial"
				onfocus="message(this.id)"/>
				<br />
				
				<!-- we identify by ID's but also names, names make grousp
				
				if you changed the name of hon you could select both yea and no for hot or not? -->
				
				
				<!-- EVENT -->
				<label for="event">Event, type of Service:</label>
				<select id="event" name="event"
				required
				title="if you're having trouble, elaborate in the comments field"
				onfocus="message(this.id)">
					<option value="">Please select one...</option>
					<option value="commission">Commissioned Fine Art</option>
					<option value="copy work">Fine Art Reproduction and Copy</option>
					<option value="concert">Concert or Live Performance</option>
					<option value="general">General Event Coverage</option>
					<option value="wedding">Wedding</option>
					<option value="couples">Couples Portrait</option>
					<option value="family">Family Portrait</option>
					<option value="portrait">General Portrait</option>
					<option value="headshots">Proffessional Headshots</option>
					<option value="product">Product Photography</option>
					<option value="other">Other</option>
				</select>
				<br />
				
				<!-- Comments -->
				<!-- textareas do not support pattern attribute -->
				<label for="comments">Comments:</label>
				<textarea id="comments" name="comments"
					rows="3" cols="49"
					title="No / or \"
					placeholder="enter your details"
					maxlength="500"
					onfocus="message(this.id)"></textarea>
				<span class="hint"><br /> Hint: <span id="jsmsgs"></span> </span>
				<div id="butelement">
				<input type="submit" value="Submit" class="buttons" />
				<input type="reset" value="Reset" onclick="history.go(0)" class="buttons" id="greybutton" />
				</div>
			<!-- </p> -->
			
			
		</form>
		
		
		
		<div id="prefooter">
		</div>
		
		
		
	
	</div>
	<?php include('../php/footer.html'); ?>
  </body>

</html>