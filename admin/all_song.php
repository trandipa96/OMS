<!DOCTYPE html>
<html lang="en">

<!--header-->
<?php include 'includes/head.php';?>

<body>
<?php
 
require('../db/db.php');
include("config/auth.php"); //include auth.php file on all secure pages ?>
<!--nevigation-->
<?php include 'includes/nav.php';?>
<br>

<!--carosoul-->


<!--jumbotron-->
<div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
</div>
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Track</th>
      <th scope="col">Release Day</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table>
  

<br>
<br>

<!--Footer-->
<?php include 'includes/footer.php';?>

</body>
</html>