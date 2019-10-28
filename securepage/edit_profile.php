<!DOCTYPE html>
<html lang="en">

<!--header-->
<?php include 'head.php';?>

<body>
<?php
 
require('../db/db.php');
include("../db/auth.php"); //include auth.php file on all secure pages

if (isset($_REQUEST['id'])){
  
   
		$id = $_SESSION['username_id'];
		$username = $_SESSION['username'];
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		
        $query = "UPDATE  `user` SET username ='$username', password='".md5($password)."', email='$email' WHERE id='$id' ";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Updated successfully.</h3></div>";
            header("Location: all_song.php");
        }
    }else{



?>
<!--nevigation-->
<?php include 'secure_nav.php';?>


<br>
 <h2 class="text-center">Edit Profile</h2>



<div class="container">
<div class="row">
  <div class="col-8">
  
  <form  action="" method ="post" >
<div class="form-group">
    <label for="formGroupExampleInput">Username</label>
    <input type="hidden" class="form-control"  name="id" value="<?php $_SESSION['username_id'];?>" required>
    <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $_SESSION['username']; ?>" placeholder="Username" name="username" disabled required>
  </div>
  <div class="form-group"> 
    <label for="formGroupExampleInput2">Email</label>
    <input type="email" class="form-control" id="formGroupExampleInput2" value="<?php echo $_SESSION['email']; ?>" placeholder="Email" name="email" required>
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
  <button type="submit" class="btn btn-primary">Update</button>
    <button class="btn btn-outline-dark" type="reset" >Reset</button>
</form>
  
  </div>
  <div class="col-4">
  <br>
  

  </div>
</div>
</div>
<br>
<br>
    <?php } ?>
<!--Footer-->
<?php include '../basics/footer.php';?>

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

