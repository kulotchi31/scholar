<?php 

  session_start();

require 'connect.php';
require 'functions.php'; 
include('includes/headerscho.php'); 
include('includes/navscho.php'); 

  if(isset($_SESSION['username'], $_SESSION['password'])) {

    if (isset($_POST["submit"])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $scholar_id = $_POST['scholar_id'];
     
      
    
    
    
      $sql = "UPDATE `students` SET `username`='$username',`password`='$password',`scholar_id`='$scholar_id' WHERE id = $id";
    
      $result = mysqli_query($con, $sql);
    
      if ($result) {
        echo "Data updated successfully";
      } else {echo "Data updated successfully";
        echo "Failed: " . mysqli_error($con);
      }
    }

?>




<style>


.button{
  margin-top: 20px;
  margin-left: 40%;
}
.email{
  margin-top: 20px;
  margin-left: 40%;
}
.col{
  padding-top: 20px;
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
          
    <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }

       
        $sql = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        
    
      <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">

    <div class="email">
           <?php echo $row['email'] ?>
</div>
          <div class="col">
            <label class="form-label">Username:</label>
            <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>">
          </div>
          <div class="col">
            <label class="form-label">Username:</label>
            <input type="text" class="form-control" name="username" value="<?php echo $row['fname'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Password:</label>
            <input type="text" class="form-control" name="password" value="<?php echo $row['password'] ?>">
          </div>
        </div>

        <div class="col">
            <label class="form-label">Scholar ID:</label>
            <input type="text" class="form-control" name="scholar_id" value="<?php echo $row['scholar_id'] ?>">
          </div>
        </div>


       

        
        <div class="button">
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <button type="submit" class="btn btn-primary" name="scholar">Accept</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
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







