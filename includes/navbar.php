<style>
  
  #accordionSidebar {
    background: lightgray;
    color: black;
  }

  #divider{
    border: 2px solid white;
    height: 60px;
    width: 226px;
  }
  #divider:hover{
   background-color: darkgray;
  }
  h4{
    font-size: 17px;
    margin-left: 40px;
    color: black;
  }
  #admin{
    color: black;
    font-weight: normal;
    
  }
  #divider1{
    border: 2px solid white;
    height: 60px;
    border-top: none;
    width: 226px;
  }
  #divider1:hover{
   background-color: darkgray;
  }
 

  
  
  </style>
<!-- Sidebar -->
<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center"  id="imgs">
  <div class="sidebar-brand-icon rotate-n-15">
    
  </div>
  <img class="img-profile rounded-circle"  src="pic3.png" width="40">
  <span>
  <div class="sidebar-brand-text mx-2" id="admin">ADMIN PORTAL</div>
  </span>

  

</a>

<!-- Divider -->


<!-- Nav Item - Dashboard -->
<li class="nav-item active"id="divider">
  <a class="nav-link" href="home.php">
    <span><h4>Dashboard</h4></span></a>
</li>

<!-- Divider -->


<!-- Heading -->

<!-- Nav Item - Pages Collapse Menu -->





<li class="nav-item active" id="divider1">
  <a class="nav-link" href="napplic.php">
    <span><h4>LGU SCHOLARS</h4></span></a>
</li>



<!-- Nav Item - Utilities Collapse Menu -->


<!-- Divider -->


<!-- Heading -->




<!-- Nav Item - Charts -->

<li class="nav-item active" id="divider1">
  <a class="nav-link" href="course.php">
    <span><h4>Course</h4></span></a>
</li>


<li class="nav-item active" id="divider1">
  <a class="nav-link" href="university.php">
    <span><h4>University</h4></span></a>
</li>


</ul>

 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>



     

      

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">
            
         ADMIN
            
          </span>
          <img class="img-profile rounded-circle" src="pic3.png">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <!-- <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
            Settings
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
            Activity Log
          </a> -->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

    <form action="logout.php" method="POST"> 
    
      <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

    </form>


  </div>
</div>
</div>
</div>
