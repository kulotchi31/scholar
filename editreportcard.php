<?php
session_start()
?>

<?php
require 'connect.php';
require 'functions.php'; 
include('includes/headerscho.php'); 
include('includes/navscho.php'); 


if(isset($_POST['update_profile2'])){

  $update_image = $_FILES['update_image']['name'];
  $update_image_size= $_FILES['update_image']['size'];
  $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
  $update_image_folder = 'upload/'.$update_image;




if(!empty($update_image)){
  if($update_image_size > 2000000){
     $message[] = 'image is too large';
  }else{
     $image_update_query = mysqli_query($con, "UPDATE `report_card_tbl` SET `report_card`='$update_image' WHERE repor_card_id= '".$_GET['id']."'") or die('query failed');
     if($image_update_query){
        move_uploaded_file($update_image_tmp_name, $update_image_folder);
       
     }
     // $message[] = 'image updated succssfully!';
  }
}



if(!empty($update_image2)){
  if($update_image_size2 > 2000000){
     $message[] = 'image is too large';
  }else{
     $image_update_query = mysqli_query($con, "UPDATE `requirements_tbl` SET `COR`='$update_image2' WHERE requirements_id = '".$_GET['id']."'") or die('query failed');
     if($image_update_query){
        move_uploaded_file($update_image_tmp_name2, $update_image_folder2);
       
     }
     // $message[] = 'image updated succssfully!';
  }
}

if(!empty($update_image3)){
  if($update_image_size3 > 2000000){
     $message[] = 'image is too large';
  }else{
     $image_update_query = mysqli_query($con, "UPDATE `requirements_tbl` SET `COG`='$update_image3' WHERE requirements_id = '".$_GET['id']."'") or die('query failed');
     if($image_update_query){
        move_uploaded_file($update_image_tmp_name3, $update_image_folder3);
       
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

   <h2>Update Report Card</h2>


   

      <div class="container">  


<div class="card" style="width: 18rem; margin-right: 30px; margin-top: 25px;" >
  <div class="card-body">
  

  <?php
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }
        $query = "SELECT * FROM report_card_tbl  WHERE repor_card_id = '".$_GET['id']."' ";
        if($result = mysqli_query($con, $query)) {
        $row = mysqli_fetch_assoc($result);
          echo '<img class="img1" src="upload/'.$row['report_card'].'" width="250" height="250" style=" margin-bottom: 25px;" >';
        } else {
          die("Error with the query in the database");
        }
      ?>
<strong><label>Report Card</label></strong>
<input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="form-group" class="box">   
</div>
</div>


   
      </div>

  


<!-- <input type="submit" value="update profile" name="update_profile" class="btn">
         <a href="homescho.php" class="delete-btn">go back</a> -->
         <div class="button">
          <button type="submit" class="btn btn-success" value="update profile" name="update_profile2">Update</button>
          <a href="reportcard.php" class="btn btn-danger">Cancel</a>
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