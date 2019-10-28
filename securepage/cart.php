<?php


$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='alert alert-danger'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}


?>


<!DOCTYPE html>
<html lang="en">

<!--header-->
<?php include 'head.php';?>

<body>
<?php
 
require('../db/db.php');
include("../db/auth.php"); //include auth.php file on all secure pages ?>
<!--nevigation-->
<?php include 'secure_nav.php';?>
<br>

<!--jumbotron-->
<div class="jumbotron text-center">
  <h1>Shopping Cart</h1>
 
</div>
 

<div class="container">



<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="resource/cart-icon.png" /> 
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="container">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>SONG NAME</td>

<td>PRICE</td>
<td> TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" /><br>
<button type='submit' class='btn btn-primary'>Remove</button>
</form>
</td>

<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">

<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
<?php $_SESSION['amount'] =  $total_price; ?>
<a class="btn btn-primary" href="payment.php" role="button">Proceed to payment</a>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


<br /><br /></div>








<br>
<br>

<!--Footer-->
<?php include '../basics/footer.php';?>

</body>
</html>
