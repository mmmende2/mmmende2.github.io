<!DOCTYPE html>

<?php 
	include('../cart/startCart.php');
	include('../cart/cartFX.php');

	if(@$_REQUEST['command'] == 'add' && $_REQUEST['productid'] > 0)
		{
			$product_id = $_REQUEST['productid'];
			add_to_cart($product_id, 1);
			header("Location: indexCart.php");
			exit();
		}	
	//redircts to session cart if you haz it
	if (isset($_SESSION['cart']) && $_SESSION['cart'] != "")
		header("Location: indexCart.php");
	
?>
   
<!--
CART
projectFINAL
425
Mario Mendez

suppres variable ger variabl if iss set in login 'command'
-->


<html lang="en">
  	
  <head>
	<?php 
	
		
		
		if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
		{
			echo '<base href="http://localhost/CIS425/2161-Spring/projectFinal">';
			
		}	
		else 
		{
			echo '<base href="http://cis425a.wpcarey.asu.edu/mmmende2/projectFinal">';
			include('../connect/server-connect.php');
		}
		
		
	
	?>
	
    <!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="projectFinal/stylesheets/6cart.css" />
	
	<!--JS STUFFS -->
	<script type="text/javascript">
		function addtocart(prod_id)
		{
			document.productform.productid.value = prod_id;
			document.productform.command.value = 'add';
			document.productform.submit();
		}
	</script>
	
	<script type="text/javascript" src="projectFinal/js/messages.js"></script>
	
	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="projectFinal/images/favicon.ico" />
	
    <!-- Web Page Title -->
    <title>My Cart</title>

  </head>

  <body>
	<div id="wrapper"> 
		<?php include ('../php/header.php'); ?>
		
		
		<form name="productform">
			<input type="hidden" name="productid" />
			<input type="hidden" name="command" />
		</form>
		<h1 class="indentMore">Available Products</h1>
		<table id="product_table">
		
			<?php 
				$query = "SELECT * FROM cart_products";
				$result = mysqli_query($dbc, $query) or die("Error in DB");
				while($row = mysqli_fetch_array($result))
				{
					echo '<tr>
					<td><img class="shopping_img" alt="img" src="' . $row['image'] . '" /></td>
					<td><p><strong>' . $row['title'] . '</strong></p> 
					<p>' . $row['description'] . '</p>
					<p>Price:<strong>&#36;' . $row['price'] . '</strong></p>
					</td>
					<td><input type="button" class="greybutton" value="Add to Cart" onclick="addtocart(' . $row['id'] . ')" />
					</td>
					</tr>';
				}
				
			
				
			?> <!--changed name to title -->
		
		</table>
		
		<div id="prefooter"></div>
		
	</div>
	<?php include('../php/footer.html'); ?>
  </body>
  
  <!-- 
  
  
  
  
  
  if($_REQUEST['command'] == 'delete' && $_REQUEST['productid'] > 0)
		{
			remove_product($_REQUEST['productid']);
		}
		elseif($_REQUEST['command'] == 'clear')
		{
			unset($_SESSION['cart']);
		}
		elseif($_REQUEST['command'] == 'update')
		{
			$max = count($_SESSION['cart']);
			
			for($i = 0; $i < $max; $i++)
			{
				$product_id = $_SESSION['cart'][$i]['productid'];
				$quantity = intval($_REQUEST['product'.$product_id]);
				
				if($quantity > 0 && $quantity <= 1000)
				{
					$_SESSION['cart'][$i]['quantity'] = $quantity;
				}
				else
				{
					$message = 'Some products were not updated!';
				}
				
			}
			
		}
		elseif($_REQUEST['command'] == 'complete')
		{
			header("Location: cartThankYou.html");
		}


	-->

</html>