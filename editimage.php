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



</style>



 

  

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Scholarship Application Form</title>
</head>
<body>

<?php
      $select = mysqli_query($con, "SELECT * FROM `students`WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>
    <div class="container">
        <form class="application-form" id="scholarshipForm" action="submit.php" method="post">
            <div class="form-section" id="section-1">
                
                <section>
                <div class="container">


                <div class="card" style="width: 18rem; margin-right: 30px; margin-top: 25px;" >
  <div class="card-body">
  

  <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png" >';
         }else{
            echo '<img src="upload/'.$fetch['cor_img'].'" width="250" height="250" style=" margin-bottom: 25px;"  >';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
<strong><label>Tax Exemption</label></strong>
<input type="file" name="update_image1" accept="image/jpg, image/jpeg, image/png" class="box">   
</div>
</div>

<div class="card" style="width: 18rem; margin-right: 30px; margin-top: 25px;" >
  <div class="card-body">
  

  <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png" >';
         }else{
            echo '<img src="upload/'.$fetch['cor_img'].'" width="250" height="250" style=" margin-bottom: 25px;"  >';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
<strong><label>Certificate of Registration</label></strong>
<input type="file" name="update_image1" accept="image/jpg, image/jpeg, image/png" class="box">   
</div>
</div>

</div>

<div class="container">


                <div class="card" style="width: 18rem; margin-right: 30px; margin-top: 25px;" >
  <div class="card-body">
  

  <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png" >';
         }else{
            echo '<img src="upload/'.$fetch['cor_img'].'" width="250" height="250" style=" margin-bottom: 25px;"  >';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
<strong><label>Certificate of Grades</label></strong>
<input type="file" name="update_image1" accept="image/jpg, image/jpeg, image/png" class="box">   
</div>
</div>

<div class="card" style="width: 18rem; margin-right: 30px; margin-top: 25px;" >
  <div class="card-body">
  

  <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png" >';
         }else{
            echo '<img src="upload/'.$fetch['cor_img'].'" width="250" height="250" style=" margin-bottom: 25px;"  >';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
<strong><label>Report of Grades</label></strong>
<input type="file" name="update_image1" accept="image/jpg, image/jpeg, image/png" class="box">   
</div>
</div>

</div>

<div class="container">


                <div class="card" style="width: 18rem; margin-right: 30px; margin-top: 25px;" >
  <div class="card-body">
  

  <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png" >';
         }else{
            echo '<img src="upload/'.$fetch['cor_img'].'" width="250" height="250" style=" margin-bottom: 25px;"  >';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
<strong><label>Baranggay Clearance</label></strong>
<input type="file" name="update_image1" accept="image/jpg, image/jpeg, image/png" class="box">   
</div>
</div>

<div class="card" style="width: 18rem; margin-right: 30px; margin-top: 25px;" >
  <div class="card-body">
  

  <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png" >';
         }else{
            echo '<img src="upload/'.$fetch['cor_img'].'" width="250" height="250" style=" margin-bottom: 25px;"  >';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
<strong><label>Good Moral</label></strong>
<input type="file" name="update_image1" accept="image/jpg, image/jpeg, image/png" class="box">   
</div>
</div>

</div>
  </section>



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







