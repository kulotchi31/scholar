<?php 

  session_start();
  // echo session_id();

require 'connect.php';
require 'functions.php'; 
include('includes/headerscho.php'); 
include('includes/navscho.php'); 

  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>


<style>

.container{
   display: flex;
   justify-content: center;
   align-items: center;
   
}
.application-form{
   background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    width: 80%;
    padding: 30px;
}

/* .img1:hover{
    transform: scale(2.5); 
} */
button{
    border-radius: 30%;
    color: aliceblue;
    background: linear-gradient(to bottom left, #0033cc 32%, #33ccff 77%);
   

}


</style>



 

  

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Scholarship Application Form</title>
</head>
<body>


    <div class="container">
      
        <form class="application-form" id="scholarshipForm" action="submit.php" method="post">
            <div class="form-section" id="section-1">
                
                <section>
                <center><h2>Image Requirements</h2></cente>
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
          echo '<img class="img1" src="upload/'.$row['tax_img'].'" width="250" height="250" style=" margin-bottom: 25px;" >';
        } else {
          die("Error with the query in the database");
        }
      ?>
<strong><label>Tax Exemption</label></strong>   
</div>
</div>

<div class="card" style="width: 18rem; margin-right: 30px; margin-top: 25px;" >
  <div class="card-body">
  

  <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
        if($result = mysqli_query($con, $query)) {
        $row = mysqli_fetch_assoc($result);
          echo '<img class="img1" src="upload/'.$row['cor_img'].'" width="250" height="250" style=" margin-bottom: 25px;" >';
        } else {
          die("Error with the query in the database");
        }
      ?>
<strong><label>Certificate of Registration</label></strong>  
</div>
</div>

</div>

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
          echo '<img class="img1" src="upload/'.$row['cog_img'].'" width="250" height="250" style=" margin-bottom: 25px;" >';
        } else {
          die("Error with the query in the database");
        }
      ?>
<strong><label>Certificate of Grades</label></strong>   
</div>
</div>

<div class="card" style="width: 18rem; margin-right: 30px; margin-top: 25px;" >
  <div class="card-body">
  

  <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
        if($result = mysqli_query($con, $query)) {
        $row = mysqli_fetch_assoc($result);
          echo '<img class="img1" src="upload/'.$row['report_img'].'" width="250" height="250" style=" margin-bottom: 25px;" >';
        } else {
          die("Error with the query in the database");
        }
      ?>
<strong><label>Report of Grades</label></strong>
  
</div>
</div>

</div>

<div class="container">


                <div class="card" style="width: 18rem; margin-right: 30px; margin-top: 25px;" >
  <div class="card-body">
  

  <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $sql = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
        if($result = mysqli_query($con, $query)) {
        $row = mysqli_fetch_assoc($result);
          echo '<img class="img1" src="upload/'.$row['brgclear_img'].'" width="250" height="250" style=" margin-bottom: 25px;" >';
        } else {
          die("Error with the query in the database");
        }
      ?>   
<strong><label>Baranggay Clearance</label></strong>   
</div>
</div>

<div class="card" style="width: 18rem; margin-right: 30px; margin-top: 25px;" >
  <div class="card-body">
  

  <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
        if($result = mysqli_query($con, $query)) {
        $row = mysqli_fetch_assoc($result);
          echo '<img class="img1" src="upload/'.$row['moral_img'].'"width="250" height="250" style=" margin-bottom: 25px;" >';
        } else {
          die("Error with the query in the database");
        }
      ?> 
<strong><label>Good Moral</label></strong>  
</div>
</div>

</div>
  </section>

  <div class="options">
        <a class="btn btn-primary" style="float: right;" href="editreq.php">Edit</a>
      </div>
      



                <!-- <button class="submit-btn" type="submit">Submit Application</button> -->
            </div>
        </form>
    </div>
    <script src="script.js"></script>
    
</body>
</html>







  <!-- <div class="options">
        <a class="btn btn-primary" href="editprofile.php">Edit Profile</a>
      </div> -->


	<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php


  } else {
    header("location:index.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>







