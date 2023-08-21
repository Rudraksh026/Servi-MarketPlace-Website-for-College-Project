<?php

echo '<nav class="navbar bg-body-tertiary fixed-top" style="background-color: white !important;">
<div class="container-fluid">
  <a class="navbar-brand" href="Home.php"><img class="logo" src="img/icon.png" alt=""></a>
  <form class="d-flex mt-3 search" role="search" action="home.php" method="post">
                    <input class="form-control me-2" id="search" type="text" placeholder="Search" name="search" aria-label="Search">
                    <button class="btn btn-outline-success">Search</button>
                  </form>
  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color:black;">Welcome, '.$_SESSION["adminName"].' on Servi-Connect</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addService.php">Add Your Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deleteService.php">Delete Your Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</div>
</nav>';
?>