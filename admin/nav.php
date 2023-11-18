<?php
echo '
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
<a href="adminIndex.php" class="logo d-flex align-items-center">
 <img src="../img/icon.png" alt="System Logo">
 
</a>
<i class="bi bi-list toggle-sidebar-btn"></i>
</div>


<nav class="header-nav ms-auto">
<ul class="d-flex align-items-center">
 <li class="nav-item dropdown pe-3">

   <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
     <img src="http://localhost/php-spms/uploads/avatars/1.png?v=1678760026" alt="Profile" class="rounded-circle">
     <span class="d-none d-md-block dropdown-toggle ps-2">admin</span>
   </a>

   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
     <li class="dropdown-header">
       <h6>Adminstrator Admin</h6>
       <span>Administrator</span>
     </li>
     <li>
       <hr class="dropdown-divider">
     </li>

     <li>
       <hr class="dropdown-divider">
     </li>

     
     <li>
       <hr class="dropdown-divider">
     </li>
    
     <li>
       <hr class="dropdown-divider">
     </li>

     <li>
       <a class="dropdown-item d-flex align-items-center" href="logout.php">
         <i class="bi bi-box-arrow-right"></i>
         <span>Sign Out</span>
       </a>
     </li>

   </ul>
 </li>

</ul>
</nav>

</header> ';
?>