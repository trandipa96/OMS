<!DOCTYPE html>
<html lang="en">

<!--header-->
<?php include 'basics/head.php';?>

<body>
<?php
	require('./db/db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
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
    }else{
?>
<!--nevigation-->
<?php include 'basics/nav.php';?>
<br><br>

<div class="container">
  <div class="jumbotron bg-primary text-white text-center">
    <h1>My Tune</h1>      
    <p>No Music <span class="font-italic">No Life</span></p>
  </div>    
</div>
<br><br> 
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
 <h2 class="text-center">My Tune Registration</h2>
<form  action="" method ="post">
  <div class="form-group">
    <label for="formGroupExampleInput">Username</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="username" required>
  </div>
  <div class="form-group"> 
    <label for="formGroupExampleInput2">Email</label>
    <input type="email" class="form-control" id="formGroupExampleInput2"  placeholder="Email" name="email" required>
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput4">Password</label>
    <input type="password" class="form-control" id="formGroupExampleInput4" onkeyup='passwordCheck();' placeholder="Password" name="password" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput5">Re Type Password</label>
    <input type="password" class="form-control" id="formGroupExampleInput5" onkeyup='passwordCheck();' placeholder="Re type your Password" required>
   <br> <span id='message'></span>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-outline-dark" href="#" role="button">Sign in</a>
</form>

</div>
<div class="col-sm-3"></div>
</div>
  
<br><br><br>

<?php } ?>
<!--Footer-->
<?php include 'basics/footer.php';?>
<script>
  

  var passwordCheck = function() {
    if (document.getElementById('formGroupExampleInput4').value ==
      document.getElementById('formGroupExampleInput5').value) {
      document.getElementById('message').innerHTML = '<div class="alert alert-success"><strong>Success!</strong> This Password matching</div>';
    } else {
     
      document.getElementById('message').innerHTML = '<div class="alert alert-warning"><strong>Warning!</strong> This Password not matching</div>';
    }
  }
  </script>

</body>
</html>
