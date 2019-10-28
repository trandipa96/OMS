<!DOCTYPE html>
<html lang="en">

<!--header-->
<?php include 'head.php';?>

<body>
<?php
 
require('../db/db.php');
include("../db/auth.php"); //include auth.php file on all secure pages 


$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];
$track = $row['track'];
$author =$row['author'];
$release_date=$row['release_date'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'image'=>$image,
	'track'=>$track,
	'author' =>$author,
	'release_date'=>$release_date,
	'quantity'=>1)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='alert alert-primary'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='alert alert-danger'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='alert alert-success'>Product is added to your cart!</div>";
	}

	}
}



?>
<!--nevigation-->
<?php include 'secure_nav.php';?>

<br>

 




<?php


$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='container'>
		<div class='card mb-2'>
		<form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
		<img class='card-img-top' src='".$row['image']."' alt='Card image cap' style='padding: 5px; width: 200px;'>
		<div class='card-body'>
		  <h5 class='card-title'>".$row['name'] . "  <span> by ".$row['author']."</span> </h5>
		  <h6 class='card-title'>$".$row['price']."</h6>
		  <p class='card-text'>Release Date ". $row['release_date']."</p>

		  <audio controls>
  		<source src=".$row['track']." type='audio/mpeg'>
  		Your browser does not support the audio element.
		</audio>
		<br>
		  <button type='submit' class='btn btn-primary'>Add to Card</button>
		</div>
		</form>
	  </div>
	  </div>";
        }

		



mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br /><br />
</div>



<br>
<br>

<!--Footer-->
<?php include '../basics/footer.php';?>

</body>
</html>
