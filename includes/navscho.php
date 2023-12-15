
<?php

if(isset($_POST['update_profile'])){



$update_image = $_FILES['update_image']['name'];
$update_image_size= $_FILES['update_image']['size'];
$update_image_tmp_name = $_FILES['update_image']['tmp_name'];
$update_image_folder = 'upload/'.$update_image;

if(!empty($update_image)){
   if($update_image_size > 2000000){
      $message[] = 'image is too large';
   }else{
      $image_update_query = mysqli_query($con, "UPDATE `students` SET `profile`='$update_image' WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'") or die('query failed');
      if($image_update_query){
         move_uploaded_file($update_image_tmp_name, $update_image_folder);
         
      }
      // $message[] = 'image updated succssfully!';
   }
}




}

?>
<?php
   $select = mysqli_query($con, "SELECT * FROM `students`WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'") or die('query failed');
   if(mysqli_num_rows($select) > 0){
      $fetch = mysqli_fetch_assoc($select);
   }
?>
<?php
    $sql = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
<style>
  
  #accordionSidebar {
    background: lightgray;
    color: black;
  }

  #divider {
    border: 2px solid white;
    height: 55px;
    width: 227px;
    

  }
  h4{
    font-size: 16px;
    margin-left: 20px;
    color: black;

  }
  #admin{
    color: black;
    font-weight: normal;
    
  }
  #divider1{
    border: 2px solid white;
    height: 60px;
    width: 226px;
  }
  #divider2{
    border: 2px solid white;
    height: 60px;
    border-top: none;
    width: 226px;
  }
#divider1:hover{
   background-color: darkgray;
  }
  #divider2:hover{
   background-color: darkgray;
  }

  .container{
    margin-left: 20px;
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
  <div class="sidebar-brand-text mx-2" id="admin">Scholar</div>
  </span>

  

</a>

<!-- Divider -->


<!-- Nav Item - Dashboard -->
<li class="nav-item active"id="divider1">
  <a class="nav-link" href="homescho.php">
    <span><h4>Personal Information</h4></span></a>
</li>

<!-- Divider -->


<!-- Heading -->

<!-- Nav Item - Pages Collapse Menu -->





<li class="nav-item active" id="divider2">
  <a class="nav-link" href="imagereq.php">
    <span><h4>Image Requirement</h4></span></a>
</li>



<!-- Nav Item - Utilities Collapse Menu -->


<!-- Divider -->


<!-- Heading -->




<!-- Nav Item - Charts -->

</ul>
<!-- End of Sidebar -->

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
                  
                <b><?=$row['fname'];?></>
                  
                </span>
               

                 <?php
         if($fetch['profile'] == ''){
            echo '<img class="img-profile rounded-circle" for="file-input" src="images/default-avatar.png" width="100" height="100"> ';
     
         }else{
            echo '<img class="img-profile rounded-circle" src="upload/'.$fetch['profile'].'" width="100" height="100">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
         
      ?>
      
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

                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#login">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Upload Profile
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Log out
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


  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload your profile here</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
<div class="modal-body">
  


<div class="container">

<?php
   $select = mysqli_query($con, "SELECT * FROM `students`WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'") or die('query failed');
   if(mysqli_num_rows($select) > 0){
      $fetch = mysqli_fetch_assoc($select);
   }
?>

<form class="application-form" action="" method="post" enctype="multipart/form-data">


 <div class="container">  


<div class="card" style="width: 18rem; margin-right: 30px; margin-top: 25px;" >
<div class="card-body">


<?php
     if(isset($_SESSION['prompt'])) {
       showPrompt();
     }
     $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
     if($result = mysqli_query($con, $query)) {
     $row = mysqli_fetch_assoc($result);


     }if($fetch['profile'] == ''){
      echo '<img for="file-input" src="images/default-avatar.png" width="250" height="250" style=" margin-bottom: 25px;"> ';

   

  } else {
       
    echo '<img class="img1" src="upload/'.$row['profile'].'" width="250" height="250" style=" margin-bottom: 25px;" >';
   
     }
   ?>

<input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">   
</div>
</div>



   </div>

<!-- <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="homescho.php" class="delete-btn">go back</a> -->
    
   



</div>
<div class="modal-footer">
<button type="submit" class="btn btn-success" value="update profile" name="update_profile">Upload</button>
      
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
</form>
   
</div> 
          


        </div>
      </div>
    </div>
  </div>

 
