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

.img1{
    height: 20%;
    width: 20%;
}    
.img1:hover{
    transform: scale(2.5); 
}
.pic{
    text-align: center;
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
                <div class="container">
    <div class="pic">
    <h2>Tax Exemption</h2> 
      <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
        if($result = mysqli_query($con, $query)) {
        $row = mysqli_fetch_assoc($result);
          echo '<img class="img1" src="upload/'.$row['tax_img'].'">';
        } else {
          die("Error with the query in the database");
        }
      ?>   
    </div>

    <div class="pic">
    <h2>Cor</h2>   
      <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
        if($result = mysqli_query($con, $query)) {
        $row = mysqli_fetch_assoc($result);
          echo '<img class="img1" src="upload/'.$row['cor_img'].'">';
        } else {
          die("Error with the query in the database");
        }
      ?>   
    </div>
    <div class="pic">
    <h2>Cog</h2>   
      <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
        if($result = mysqli_query($con, $query)) {
        $row = mysqli_fetch_assoc($result);
          echo '<img class="img1" src="upload/'.$row['cog_img'].'">';
        } else {
          die("Error with the query in the database");
        }
      ?>   
    </div>
    
    <div class="pic">
    <h2>Report Card</h2>   
      <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
        if($result = mysqli_query($con, $query)) {
        $row = mysqli_fetch_assoc($result);
          echo '<img class="img1" src="upload/'.$row['report_img'].'">';
        } else {
          die("Error with the query in the database");
        }
      ?>   
    </div>
    <div class="pic">
    <h2>Baranggay Clearance</h2>   
      <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $sql = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
        if($result = mysqli_query($con, $query)) {
        $row = mysqli_fetch_assoc($result);
          echo '<img class="img1" src="upload/'.$row['brgclear_img'].'">';
        } else {
          die("Error with the query in the database");
        }
      ?>   
    </div>
    <div class="pic">
    <h2>Good Moral</h2>   
      <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
        if($result = mysqli_query($con, $query)) {
        $row = mysqli_fetch_assoc($result);
          echo '<img class="img1" src="upload/'.$row['moral_img'].'">';
        } else {
          die("Error with the query in the database");
        }
      ?>   
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







