<!DOCTYPE html>
<html lang="en">

<!--header-->
<?php include 'basics/head.php';?>

<body>

<!--nevigation-->
<?php include 'basics/nav.php';?>

<div  class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/mm.jpg" alt="First slide">
    </div>
    
    <div class="carousel-caption d-none d-md-block">
    <h5>No Music.. No Life..</h5>
    <p>listen to your Heart Beat</p>
     </div>
  </div>
</div>
  
  <br><br>

<div class="container">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        What is Mytune ?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      MyTune is a digital music, podcast, and video streaming service that gives you access to millions of songs and other content from artists all over the world. </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        What Premium ?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      If you have Premium, you can use Spotify anywhere in the world for as long as you like! But if you permanently move to another country, you need to update your payment method to one that's issued in your new country</div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        No account linked to email address?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      If you see the error message "The email address you entered is not connected to a MyTune account", try the above steps again with any other email addresses you have. </div>
    </div>
  </div>
</div>
</div>

<br><br>
<!--Footer-->
<?php include 'basics/footer.php';?>

</body>
</html>
