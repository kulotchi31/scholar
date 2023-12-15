<?php 
   session_start();
   if(isset($_SESSION['username'], $_SESSION['password'])) {
   include "connect.php";
   ?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

?>


<style>
#rad:hover{
  border-radius: 15px;
  font-style: normal;
  font: 400;
  color: black;
  background-color: aqua; 
}
#rad{
  border-radius: 15px;
  background-color: darkgray;
  opacity: calc(0.9);
}
#dash{
  color: black;
  background-image: url(pic3.png);
  background-size: contain;
  background-repeat: repeat-y;
  background-position: 350px;
  
  
  
  
  
}
button{
    border-radius: 30%;
    color: aliceblue;
    background: linear-gradient(to bottom left, #0033cc 32%, #33ccff 77%);
}



</style>


<!-- Begin Page Content -->
<div class="container-fluid" id="dash">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
       class="fas fa-download fa-sm text-white-50"></i> Generate Payroll</a> -->
  </div>

  <!-- Content Row -->
  <div class="row" >

    
    <div class="col-xl-3 col-md-6 mb-4">
      <div class=" shadow h-100 py-2" id="rad">
        <div class="card-body" >
<div class="floatn" style="margin-left: 155px; margin-top: -20px; ">
        <?php
$count_query = "SELECT * FROM students WHERE status= 'applicants'";
$count_query_run = mysqli_query($con, $count_query );

if ($category_total = mysqli_num_rows($count_query_run))
{
  echo '<h3 class="mb-0" style="color: white; background: crimson; width: 37px; border-radius: 50%; padding-left: 2px; padding-left: 2px; text-align: center">' .$category_total. '</h3>';
}
else{

}
?>
</div>
          <div class="row no-gutters align-items-center" >
            <div class="col mr-2">
              <!--<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div> -->
              <div class="h5 mb-0 font-weight-bold text-gray-800" class="nav-item"  >

          
              <a class="nav-link" href="table.php">
              <span><h3 style="color:black;">Applicants</h3></span></a>
              

              <!-- <h4>New Applicants</h4> -->

              </div>
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
     <!-- <a class="nav-link" href="register.php"> -->
      <div class=" shadow h-100 py-2" id="rad">
        <div class="card-body">
        <div class="floatn" style="margin-left: 155px; margin-top: -20px; ">
        <?php
$count_query = "SELECT * FROM students WHERE status= 'scholars'";
$count_query_run = mysqli_query($con, $count_query );

if ($category_total = mysqli_num_rows($count_query_run))
{
  echo '<h3 class="mb-0" style="color: white; background: crimson; width: 37px; border-radius: 50%; padding-left: 2px; text-align: center">' .$category_total. '</h3>';
}
else{

}
?>

</div>
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <!--<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div> -->
              <div class="h5 mb-0 font-weight-bold text-gray-800" class="nav-item">
              
              <a class="nav-link" href="schotab.php">
              <span> <h3 style="color:black;" >Scholars</h3></span></a>
              

              </div>
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
     <!-- <a class="nav-link" href="register.php"> -->
      <div class=" shadow h-100 py-2" id="rad">
        <div class="card-body">
        <div class="floatn" style="margin-left: 155px; margin-top: -20px; ">
        <?php
$count_query = "SELECT * FROM students WHERE status= 'pending'";
$count_query_run = mysqli_query($con, $count_query );

if ($category_total = mysqli_num_rows($count_query_run))
{
  echo '<h3 class="mb-0" style="color: white; background: crimson; width: 37px; border-radius: 50%; padding-left: 2px; text-align: center">' .$category_total. '</h3>';
}
else{

}
?>
</div>
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <!--<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div> -->
              <div class="h5 mb-0 font-weight-bold text-gray-800" class="nav-item">
              
              <a class="nav-link" href="pendingtab.php">
              <span> <h3 style="color:black;">Pending</h3></span></a>
              

              </div>
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
     <!-- <a class="nav-link" href="register.php"> -->
      <div class=" shadow h-100 py-2" id="rad">
        <div class="card-body">


        <div class="floatn" style="margin-left: 155px; margin-top: -20px; ">
        <?php
$count_query = "SELECT * FROM students WHERE status= 'rejected'";
$count_query_run = mysqli_query($con, $count_query );

if ($category_total = mysqli_num_rows($count_query_run))
{
  echo '<h3 class="mb-0" style="color: white; background: crimson; width: 37px; border-radius: 50%; padding-left: 2px; text-align: center">' .$category_total. '</h3>';
}
else{

}
?>
</div>

          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <!--<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div> -->
              <div class="h5 mb-0 font-weight-bold text-gray-800" class="nav-item">
              
              <a class="nav-link" href="rejectab.php">
              <span> <h3  style="color:black;" >Rejected</h3></span></a>
              

              </div>
            </div>
            <div class="col-auto">
            </div>
          </div>
        </div>
      </div>
    </div>

   
  </div>



  <!-- Content Row -->







<br><br><br><br><br><br><br><br><br><br><br><br><br>



<?php }else {
	header("Location: login.php");
	exit;
} ?>