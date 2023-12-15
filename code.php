<?php
session_start();
require 'connect.php';






if(isset($_GET["action"])){
    if($_GET["action"] == "approve"){
      $product_code = $_GET["id"];
      $sql = "UPDATE students SET status='approved' WHERE code='$product_code'";
      $result = mysqli_query($con, $sql);
      if($result){
          echo '<script>alert("approve success!");</script>';
      }
    }
  
    if($_GET["action"] == "decline"){
        $product_code = $_GET["id"];
        $sql = "UPDATE students SET status='approved' WHERE code='$product_code'";
        $result = mysqli_query($con, $sql);
        if($result){
            echo '<script>alert("decline success!");</script>';
        }
      }
    
  }

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: table.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: table.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $birth = mysqli_real_escape_string($con, $_POST['birth']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $school = mysqli_real_escape_string($con, $_POST['school']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $civil_status = mysqli_real_escape_string($con, $_POST['civil_status']);
    $citizen = mysqli_real_escape_string($con, $_POST['citizen']);
    $yearlevel = mysqli_real_escape_string($con, $_POST['yearlevel']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $peraddress = mysqli_real_escape_string($con, $_POST['peraddress']);
    $genaverage = mysqli_real_escape_string($con, $_POST['genaverage']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $school_type = mysqli_real_escape_string($con, $_POST['school_type']);

    

    $query = "UPDATE students SET name='$name', birth='$birth', phone='$phone', school='$school', email='$email', course='$course', civil_status='$civil_status', peraddress='$peraddress', yearlevel='$yearlevel', age='$age', genaverage='$genaverage', gender='$gender', school_type='$school_type', citizen='$citizen' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: table.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: table.php");
        exit(0);
    }

}









if(isset($_POST['save_student']))
{
   
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $mname = mysqli_real_escape_string($con, $_POST['mname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $birth = mysqli_real_escape_string($con, $_POST['birth']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $school = mysqli_real_escape_string($con, $_POST['school']);
    $schooladdr = mysqli_real_escape_string($con, $_POST['schooladdr']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $peraddress = mysqli_real_escape_string($con, $_POST['peraddress']);
    $yearlevel = mysqli_real_escape_string($con, $_POST['yearlevel']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $genaverage = mysqli_real_escape_string($con, $_POST['genaverage']);
    $civil_status = mysqli_real_escape_string($con, $_POST['civil_status']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $school_type = mysqli_real_escape_string($con, $_POST['school_type']);
    $fatheraddress = mysqli_real_escape_string($con, $_POST['fatheraddress']);
    $fathername = mysqli_real_escape_string($con, $_POST['fathername']);
    $mothername = mysqli_real_escape_string($con, $_POST['mothername']);
    $motheraddress = mysqli_real_escape_string($con, $_POST['motheraddress']);
    $fatheroccup = mysqli_real_escape_string($con, $_POST['fatheroccup']);
    $motheroccup = mysqli_real_escape_string($con, $_POST['motheroccup']);
    $fathereducattain = mysqli_real_escape_string($con, $_POST['fathereducattain']);
    $mothereducattain = mysqli_real_escape_string($con, $_POST['mothereducattain']);
    $gross = mysqli_real_escape_string($con, $_POST['gross']);
    $sibling = mysqli_real_escape_string($con, $_POST['sibling']);
    $fatherstat = mysqli_real_escape_string($con, $_POST['fatherstat']);
    $motherstat = mysqli_real_escape_string($con, $_POST['motherstat']);
    $intend = mysqli_real_escape_string($con, $_POST['intend']);
    $sadd = mysqli_real_escape_string($con, $_POST['sadd']);
    $brgy = mysqli_real_escape_string($con, $_POST['brgy']);
    $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

    



    $query = "INSERT INTO students (fname,mname,lname,birth,phone,school,schooladdr,email,peraddress,yearlevel,course,age,genaverage,civil_status,gender,school_type,fathername,mothername,fatheraddress,motheraddress,fatheroccup,motheroccup,fathereducattain,mothereducattain,gross,sibling,fatherstat,motherstat,intend,sadd,brgy,image,status,scholar_id) VALUES ('$fname','$mname','$lname','$birth','$phone','$school','$schooladdr','$email','$peraddress','$yearlevel','$course','$age','$genaverage','$civil_status','$gender','$school_type','$fathername','$mothername','$fatheraddress','$motheraddress','$fatheroccup','$motheroccup','$fathereducattain','$mothereducattain','$gross','$sibling','$fatherstat','$motherstat','$intend','$sadd','$brgy','$image','applicants','SD-')";


    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: form1.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>