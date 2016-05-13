<!-- 
finalProject
header.php
spring 2016
mario mendez

-->


<?php 
	//check global session variable 
	//OK so you will need this shit later on so pay attention
	if(!isset($_SESSION)) //YOU WILL NEED TO CHANGE THIS
	{
		session_id('user');
		session_name('user');
		session_start('user');
		
	}

?>

<header>
	<ul><!-- -->
		<li><a href="./projectFinal/index.php" id="home"><img src="projectFinal/images/martLogo.jpg" alt="Home Button" /></a></li> 
		<li>
			<a href="./projectFinal/about/index.php" id="aboutUs"><br>About Us<pre></pre></a>
		</li>
		<li>
			<a href="./projectFinal/products/index.php" id="products"><br>Gallery<pre></pre></a>
		</li>
		<li>
			<a href="./projectFinal/services/index.php" id="services"><br>Services<pre></pre></a>
		</li>
		
		<li>
			<a href="projectFinal/contact/index.php" id="contact"><br>Contact<pre></pre></a>
		</li>
		<li>
			<a href="http://www.mariomendezphotography.com/blog-1" target="_blank" ><br>Blog/Media<pre></pre></a>
		</li>
		
		
		<li>
			<a href="./projectFinal/cart/index.php" id="myCart"><br> My cART<pre></pre></a>
		</li>
		
		<?php
			if(isset($_SESSION['user']) && $_SESSION['user'] != "")
			{
				echo '<li><a href="projectFinal/php/logout.php" id="logout">Log out</a></li>';
				
				//OK so the link, href, will NEED to be changed once you get it all champ removed pre pre
				
			}
				
			else
			{
				echo '<li><a href="projectFinal/php/login.php"><br>Log in/Sign up<pre></pre></a></li>';
				
			}
			
		
		?>
	
	</ul>

</header>