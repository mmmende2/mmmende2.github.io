<!DOCTYPE html>

<?php 
	include('../cart/startCart.php');
	include('../cart/cartFX.php');
	
	$message = ""; //shit is picky 
	
	
	
	//added @ to all request? 
	
	//hey fuck face you changed $_SESSION['cart'] to $_SESSION['user'] AALL OF THEM
	
	if(@$_REQUEST['command'] == 'add' && @$_REQUEST['productid'] > 0)
		{
			$product_id = $_REQUEST['productid'];
			add_to_cart($product_id, 1);
			header("Location: indexCart.php");
			exit();
		}	
		
	if(@$_REQUEST['command'] == 'delete' && @$_REQUEST['productid'] > 0)
	{
		remove_product($_REQUEST['productid']);
	}
	elseif(@$_REQUEST['command'] == 'clear')
	{
		unset($_SESSION['cart']);
	}
	elseif(@$_REQUEST['command'] == 'update')
	{
		$max = count($_SESSION['cart']);
		for ($i = 0; $i < $max; $i++)
		{
			$product_id = $_SESSION['cart'][$i]['productid'];
			$quantity = intval(@$_REQUEST['product'.$product_id]);
			if($quantity > 0 && $quantity <= 1000)
			{
				$_SESSION['cart'][$i]['quantity'] = $quantity;
			}
			else
			{
				$message = 'Item quantity must be between 1 and 1000, use Remove Item otherwise';
			}
		}
	}
	elseif(@$_REQUEST['command'] == 'complete')
	{
		header("Location: cartThankYou.php");
	}
?>
   
<!--
CART
SERVER SERVER SERVER

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
			
			//PUT ME IN A JS FILE
			
			
			document.productform.productid.value = prod_id;
			document.productform.command.value = 'add';
			document.productform.submit();
		}
	</script>
	<script type="text/javascript">
		//this js is determing button lcicks
		//PUT ME IN A JS FILE
		function del(productid)
		{
			if(confirm('Are you sure you want to delete this item?'))
			{
				document.cartform.productid.value = productid;
				document.cartform.command.value = 'delete';
				document.cartform.submit();
			}
			
		}
		function clear_cart()
		{
			if(confirm('Are you sure you wish to empty your cart?'))
			{
				document.cartform.command.value = 'clear';
				document.cartform.submit();
			}
		}
		function update_cart()
		{
			document.cartform.command.value = 'update';
			document.cartform.submit();
			
		}
		function complete_order()
		{
			document.cartform.command.value = 'complete';
			document.cartform.submit();
		}
	</script>
	
	<script type="text/javascript" src="projectFinal/js/messages.js"></script>
	
	
	<!-- Favicon tag -->
	<link type="image/gif" rel="icon" href="projectFinal/images/favicon.ico" />
	
    <!-- Web Page Title -->
    <title>Shopping Cart</title>

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
		<form name="cartform" method="post">
			<input type="hidden" name="productid">
			<input type="hidden" name="command">
			<br />
			<!-- Keeping it one page until  you can add to cart directly from 'Gallery'
			<input type="button" value="Continue Shopping" onclick="window.location.href='projectFinal/cart/index.php'"> -->
			
			<div id="formerror"><?php echo $message ?> </div>
			<br />
			<h1 class="indentMore">My Cart</h1>
		<table id="cart_table">
			
			<?php	
				if (count(@$_SESSION['cart']))
				{
					echo '<tr>
					<th>Title</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Amount</th>
					<th>Options</th>
					</tr>';
					
					$max = count($_SESSION['cart']);
					for($i = 0; $i < $max; $i++)
					{
						@$product_id = $_SESSION['cart'][$i]['productid'];
						@$quantity = $_SESSION['cart'][$i]['quantity'];
						$product_name = get_product_name($dbc, $product_id);
						$product_price = get_price($dbc, $product_id);
						
						if ($quantity == 0)
						{
							continue;
						}
						echo '<tr>
						<td>' . $product_name . '</td>
						<td>&#36; ' . $product_price . '</td>
						<td><input type="text" name="product' . $product_id . '" value="' .
									$quantity . '" maxlength="4" size="2" /></td>
						<td>&#36; ' . $product_price*$quantity . '</td>
						<td><a href="javascript:del(' . $product_id .')">Remove Item</a></td>
						</tr>';
						
					}
					
					echo '<tr>
					<td><strong>Order Total: &#36;' . get_order_total($dbc) . '</strong></td>
					<td></td>
					<td colspan="3" id="cart_buttons">
					<input type="submit" class="greybutton" value="Clear Cart" onclick="clear_cart()">
					<input type="submit" class="greybutton" value="Update Cart" onclick="update_cart()">
					<input type="submit" class="buttons" value="Complete Order" onclick="complete_order()" autofocus>
					</td>
					</tr>';
					
				}else
				{
					echo '<tr><td>There are no items in your shopping cart.</td></tr>';
				}
					
			?>
		</table>
		</form>
		
		
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
			unset($_SESSION["cart"]);
		}
		elseif($_REQUEST['command'] == 'update')
		{
			$max = count($_SESSION["cart"]);
			
			for($i = 0; $i < $max; $i++)
			{
				$product_id = $_SESSION["cart"][$i]['productid'];
				$quantity = intval($_REQUEST['product'.$product_id]);
				
				if($quantity > 0 && $quantity <= 1000)
				{
					$_SESSION["cart"][$i]['quantity'] = $quantity;
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