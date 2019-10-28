<!DOCTYPE html>
<html lang="en">

<!--header-->
<?php include 'head.php';?>

<body>


<?php
 
require('../db/db.php');
include("../db/auth.php"); //include auth.php file on all secure pages

/*if (isset($_REQUEST['username'])){
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);

    
    $query = "INSERT into `user` (username, password, email) VALUES ('$username', '".md5($password)."', '$email')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='signin.php'>Login</a></div>";
    }
}
*/
?>
<!--nevigation-->
<?php include 'secure_nav.php';?>
<br> <br>
<div class="container">
<h3 class="text-center">Dear <?php echo $_SESSION['username']; ?> your total pay amount is $. <?php echo $_SESSION['amount'];?></h3>
<p class="text-center">Please enter the card details to proceed payment <br> we Accepted Cards</p>

<div class="icon-container text-center">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              
            </div>
            <br>
<form action="" method ="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" value="<?php echo $_SESSION['email'];?>" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="input4">Name on Card</label>
      <input type="text" class="form-control" id="input4" placeholder="Name on Card" required>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputAddress2">Credit card number</label>
    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" id="inputAddress2" placeholder="0000-0000-0000-0000" required>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="inputState">Month</label>
      <select id="inputState" class="form-control">
        
    <option selected value='1'>Janaury</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value='5'>May</option>
    <option value='6'>June</option>
    <option value='7'>July</option>
    <option value='8'>August</option>
    <option value='9'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>
        
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Exp Year</label>
      <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="inputZip" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip1">CVV</label>
      <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="inputZip1" required>
    </div>
  </div>
<br>
  <button type="submit" class="btn btn-primary">Pay</button>
</form>
</div>
<br>
<br>
<!--Footer-->
<?php include '../basics/footer.php';?>
<script>
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }    
    </script>
</body>
</html>