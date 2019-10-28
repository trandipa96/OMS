<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php"><img src="../img/mytune.png" alt="logo" img align="right" width="120px" height="50px"></a>
   <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="all_song.php">All Song</a>
    </li>
    
    
    
    
    <li class="nav-item" style="padding-left: 700px;">

    <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fa fa-user-circle-o" style="font-size:25px;color:white"></i>
  </a>

  <?php if( isset( $_SESSION['username'] ) ) { ?>
   
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href=""><?php echo $_SESSION['username']; ?></a>
    <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
    <a class="dropdown-item" href="../db/logout.php">Log Out</a>
  </div>
  <?php }?>




</div>



    </li> 

    <li class="nav-item" style="padding-left: 10px;">

<?php
//(!empty($_SESSION["shopping_cart"])) {
//$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

    <a href="cart.php"><i class="fa fa-cart-plus" style="font-size:25px;color:white"></i><span><?php //echo $cart_count; } ?></span></a>
    </li>
  </ul>
</nav>
