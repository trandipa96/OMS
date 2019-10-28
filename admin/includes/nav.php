<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Logo</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Add Song</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Users</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="all_song.php">Song</a>
    </li>
    
    
    <li class="nav-item" style="padding-left: 700px;">

    <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fa fa-user-circle-o" style="font-size:25px;color:white"></i>
  </a>

  
   
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#"><?php echo $_SESSION['username']; ?></a>
   
    <a class="dropdown-item" href="config/logout.php">Log Out</a>
  </div>


</div>



    </li> 

    
  </ul>
</nav>