<?php
session_start()
?>

<?php
require 'connect.php';
require 'functions.php'; 
include('includes/headerscho.php'); 
include('includes/navscho.php'); 


if(isset($_POST['update_profile2'])){

  $update_image5 = $_FILES['update_image5']['name'];
  $update_image_size= $_FILES['update_image5']['size'];
  $update_image_tmp_name5 = $_FILES['update_image5']['tmp_name'];
  $update_image_folder5 = 'upload/'.$update_image5;

  $update_image4 = $_FILES['update_image4']['name'];
  $update_image_size= $_FILES['update_image4']['size'];
  $update_image_tmp_name4 = $_FILES['update_image4']['tmp_name'];
  $update_image_folder4 = 'upload/'.$update_image4;



if(!empty($update_image4)){
  if($update_image_size > 2000000){
     $message[] = 'image is too large';
  }else{
     $image_update_query = mysqli_query($con, "UPDATE `students` SET `brgclear_img`='$update_image4' WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'") or die('query failed');
     if($image_update_query){
        move_uploaded_file($update_image_tmp_name4, $update_image_folder4);
       
     }
     // $message[] = 'image updated succssfully!';
  }
}

if(!empty($update_image5)){
  if($update_image_size > 2000000){
     $message[] = 'image is too large';
  }else{
     $image_update_query = mysqli_query($con, "UPDATE `students` SET `moral_img`='$update_image5' WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'") or die('query failed');
     if($image_update_query){
        move_uploaded_file($update_image_tmp_name5, $update_image_folder5);
       
     }
     // $message[] = 'image updated succssfully!';
  }
}

}

?>

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
      $select = mysqli_query($con, "SELECT * FROM `students`WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form class="application-form" action="" method="post" enctype="multipart/form-data">

   <h2>Update Requirements</h2>


   

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
          echo '<img class="img1" src="upload/'.$row['brgclear_img'].'" width="250" height="250" style=" margin-bottom: 25px;" >';
        } else {
          die("Error with the query in the database");
        }
      ?>
<strong><label>Barangay Clearance</label></strong>
<input type="file" name="update_image4" accept="image/jpg, image/jpeg, image/png" class="form-group" class="box">   
</div>
</div>

<div class="card" style="width: 18rem; margin-top: 25px;">
  <div class="card-body">

  <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
        if($result = mysqli_query($con, $query)) {
        $row = mysqli_fetch_assoc($result);
          echo '<img class="img1" src="upload/'.$row['moral_img'].'" width="250" height="250" style=" margin-bottom: 25px;" >';
        } else {
          die("Error with the query in the database");
        }
      ?>
<strong><label>Good Moral</label></strong>
<input type="file" name="update_image5" accept="image/jpg, image/jpeg, image/png" class="form-group" class="box">   
</div>
</div>
   
      </div>

<!-- <input type="submit" value="update profile" name="update_profile" class="btn">
         <a href="homescho.php" class="delete-btn">go back</a> -->
         <div class="button">
          <button type="submit" class="btn btn-success" value="update profile" name="update_profile2">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
      
</div>


<!-- <div class="button">
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div> -->
</body>
</html>
<style>


h2{
    text-align: center;
    font-size: 24px;
    color: black;
    
    
}
#cr{
  margin-right: 20px;
}
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
.button{
   float: right;
   margin-top: 20px;
}
button{
    border-radius: 30%;
    color: aliceblue;
    background: linear-gradient(to bottom left, #0033cc 32%, #33ccff 77%);
}

</style>