<!DOCTYPE html>
<html lang="en">

<!--header-->
<?php include 'basics/head.php';?>

<body>
<?php
	require('db/db.php'); 
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `user` WHERE username='$username' and password='".md5($password)."'";
    $result = mysqli_query($con,$query) or die(mysqli_error());
    
		$rows = mysqli_num_rows($result);
        if($rows==1){

          //echo json_encode($row = $result->fetch_assoc()); //view all result
          $user_data= $result->fetch_assoc(); // accosite list
          $_SESSION['username'] =  $user_data['username'];
          $_SESSION['dp'] =  $user_data['dp'];
          $_SESSION['username_id'] =  $user_data['id'];
          $_SESSION['email'] =  $user_data['email'];
         
        
			 header("Location: securepage/all_song.php"); // Redirect user to index.php
            }else{
				echo " <div class='alert alert-warning'><strong>Warning!</strong> This Password not matching Click here to <a href='signin.php'>Sign In</a></div>";
				} 
    }else{
?>
<!--nevigation-->
<?php include 'basics/nav.php';?>

<br><br>

<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<div class="container">
  <h2 class="text-center">My Tune Login</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter email" name="username">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-outline-dark" href="signup.php" role="button">Sign Up</a>
  </form>
  
  
  
</div>
</div>
<div class="col-sm-3"></div>
</div>



<br><br>

    <?php }?>
<!--Footer-->
<?php include 'basics/footer.php';?>

</body>
</html>
