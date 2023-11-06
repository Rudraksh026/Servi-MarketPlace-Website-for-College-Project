<?php
echo '<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="http://localhost/php-spms/admin">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a> 
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#services-nav" data-bs-toggle="collapse" href="#" data-bs-collapse="false">
      <i class="bi bi-menu-button-wide"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="services-nav" class="nav-content collapse  " data-bs-parent="#sidebar-nav">
      
      <li>
        <a href="list.php" class="">
          <i class="bi bi-circle"></i><span>List of Services</span>
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->
  
  
  
</ul>

</aside><!-- End Sidebar--> ';
?>