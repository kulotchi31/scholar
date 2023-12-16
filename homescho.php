<?php 
  session_start();
  if(isset($_SESSION['username'], $_SESSION['password'])) {
require 'connect.php';
require 'functions.php'; 
include('includes/headerscho.php'); 
include('includes/navscho.php'); 
 ?>
<style>
   .image-upload > input
{
    display: none;
}
button{
    border-radius: 15%;
    
    background-color: #cccccc;
   

}
</style>

 <?php
    $sql = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $birthdate = $row['birth'];
    $currentDate = date("Y-m-d");

    $age = date_diff(date_create($birthdate), date_create($currentDate));
    ?>

<?php
      $select = mysqli_query($con, "SELECT * FROM `students` WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>
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
         $image_update_query = mysqli_query($con, "UPDATE `students` SET `profile`='$update_image'WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
           
         }
         // $message[] = 'image updated succssfully!';
      }
   }


}

?>
<?php
// Check if a specific value should disable the button
$disableButton = false; // Initialize as false
$specificValue = $row['status']; // Replace 'some_value' with the value you want to check

// Check if the specific value matches the condition to disable the button
if ($specificValue === 'scholars') {
    $disableButton = true;
}
if ($specificValue === 'updated') {
    $disableButton = true;
}
?>
<a href="process.php" style="float: right; margin-right: 20px; margin-top: 10px;">
  <button <?php if ($disableButton) echo 'disabled'; ?>>Renewal</button>
</a>

<a href="editprofile.php" style="float: right; margin-right: 20px; margin-top: 10px;">
        <button >Edit</button>
</a>






    
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page of personal Information </title>
</head>
 <body>

 <div class="container">
 <table border =1 align =center cellspacing=5 cellpadding=5>
    <tr>
   
 <td><B>Name:</B> <?=$row['lname'], ', ' ,$row['fname'],', ',$row['mname'], '.'?><br>
 <B>Email:</B> <?=$row['email'];?><br>
 <B>contact:</B> <?=$row['phone'];?>
</B></td>
 <td>
    <B>permanent Adress:</B> <?=$row['brgy'];?>
</td>
<td>
    
    <!-- <img  src=”pic1.jpg” Align =”top” Width=75 height=75/> -->

   
     <div class="image-upload">
    <label for="file-input">


    <?php
         if($fetch['profile'] == ''){
            echo '<img for="file-input" src="images/default-avatar.png" width="100" height="100"> ';
     
         }else{
            echo '<img src="upload/'.$fetch['profile'].'" width="100" height="100">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
         
      ?>
        
    </label>
    <input id="file-input" type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box" class="form-group">   
  
</div> 

</div> 
    
</td>
</tr>
 <tr>
    <td colspan=3>
    
 <center><B>Personal Information </B></center>
 <B>Age:</B> <?php echo $age->format('%y');?><br>
 <B>Sex:</B> <?=$row['gender'];?><br>
 <B>Citizenship:</B> <?=$row['citizen'];?><br>
 <B>Civil Status:</B> <?=$row['civil_status'];?><br>
 <B>Birth Date:</B> <?=$row['birth'];?><br>
 <B>Place of Birth:</B> <?=$row['placeofbirth'];?>
</td>

 <tr>
 <td colspan=3>
    
    <center><B>Educational Information </B></center>
    <B>School Name:</B> <?=$row['school'];?><br>
    <B>School Address:</B> <?=$row['schooladdr'];?><br>
    <B>School Intended to Enroll In:</B> <?=$row['intend'];?><br>
    <B>Course:</B> <?=$row['course'];?><br>
    <B>School Type:</B> <?=$row['school_type'];?><br>
    <B>Year Level:</B> <?=$row['yearlevel'];?><br>
    <B>General Average:</B> <?=$row['genaverage'];?><br>
    <B>Type of Disability:</B> <?=$row['disability'];?>
   </td>
</td>
</tr>
 <tr>
 
 <td colspan=3>
    
    <center><B>Family Background</B></center>
    <B>Father Status:</B> <?=$row['fatherstat'];?><br>
    <B>Father Name:</B> <?=$row['fathername'];?><br>
    <B>Father Address:</B> <?=$row['fatheraddress'];?><br>
    <B>Father Occupation:</B> <?=$row['fatheroccup'];?><br>
    <B>Father Educational Attainment:</B> <?=$row['fathereducattain'];?><br>
    <B>Mother Status:</B> <?=$row['motherstat'];?><br>
    <B>Mother Name:</B> <?=$row['mothername'];?><br>
    <B>Mother Address:</B> <?=$row['motheraddress'];?><br>
    <B>Mother Occupation:</B> <?=$row['motheroccup'];?><br>
    <B>Mother Educational Attainment:</B> <?=$row['mothereducattain'];?><br>
    <B>Total Parent Gross Income :</B> <?=$row['gross'];?><br>
    <B>Number of Siblings:</B> <?=$row['sibling'];?><br>
   </td>
    

  
</td>
</tr>

</table>
 <Br>
 <!-- <Marquee><font           color=red><B></td>           ©           Copyrights           reserved
</B></font></Marquee> -->

<div>
 </html>
    
    <?php

  } else {
    header("location:login.php");
    exit;
  }
    unset($_SESSION['prompt']);
  mysqli_close($con);
  ?>


