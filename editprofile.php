<style>

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn:hover {
  opacity: 1;
}




.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
    margin-top: 7%;
    margin-bottom: 5%;
    width:   1000px;


    
}

.application-form {
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    width: 100%;
    max-width: 500px;
    padding: 30px;
}

.form-section {
    display: none;
}

.application-form h2 {
    margin-bottom: 20px;
    text-align: center;
    font-size: 24px;
    color: #333;
}




.prev-btn,
.next-btn,
.submit-btn {
    margin-top: 10px;
    padding: 10px 15px;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

.prev-btn {
    float: left;
}

.next-btn {
    float: right;
}



.container {
    display: flex;
    height: 80vh;
    margin-top: 7%;
    margin-bottom: 5%;
    
}
#name{
  margin-right: 10px;
  
  width: 45%;
}

#name2{
  margin-top: -7%;
  margin-right: 10px;
  width: 93%;
  
}


#name1{
  margin-right: 8px;
  width: 30%;
}

#con{
  
   margin-top: -10%;
   margin-left: 6%;
   

}
#con1{
   margin-left: 4%;
}
#con2{
  margin-left: 6%;
  padding-top: 5%;
}
.last{
  margin-bottom: -50px;
}
.next{
  margin-top: -2%;
}
#con3{
  margin-left: 6%;
  padding-top: -5%;
}
#con4{
  margin-left: 6%;
  
}
#section-2{
  padding-top: 7%;
}
.button{
  margin-top: -8%;
  margin-bottom: 3%;

}
button{
    border-radius: 30%;
    color: aliceblue;
    background: linear-gradient(to bottom left, #0033cc 32%, #33ccff 77%);
}








</style>
<?php 
session_start();
?>
<?php
require 'connect.php';
require 'functions.php'; 
include('includes/headerscho.php'); 
include('includes/navscho.php'); 


// $id = session_id();
// echo session_id();

if (isset($_POST["submit"])) {


    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $birth = $_POST['birth'];
    $phone = $_POST['phone'];
    $school = $_POST['school'];
    $citizen = $_POST['citizen'];
    $placeofbirth = $_POST['placeofbirth'];
    $schooladdr = $_POST['schooladdr'];
    $email = $_POST['email'];

    $yearlevel = $_POST['yearlevel'];
    $course = $_POST['course'];
    $age = $_POST['age'];
    $genaverage = $_POST['genaverage'];
    $civil_status = $_POST['civil_status'];
    $gender = $_POST['gender'];
    $school_type = $_POST['school_type'];
    $fatheraddress =  $_POST['fatheraddress'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $motheraddress = $_POST['motheraddress'];
    $fatheroccup = $_POST['fatheroccup'];
    $motheroccup = $_POST['motheroccup'];
    $fathereducattain = $_POST['fathereducattain'];
    $mothereducattain = $_POST['mothereducattain'];
    $gross = $_POST['gross'];
    $sibling = $_POST['sibling'];
    $fatherstat = $_POST['fatherstat'];
    $motherstat = $_POST['motherstat'];
    $intend = $_POST['intend'];
    $brgy = $_POST['brgy'];
    $disability =  $_POST['disability'];
 
  



  $sql = "UPDATE `students` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`birth`='$birth',`phone`='$phone',`school`='$school',`citizen`='$citizen',`placeofbirth`='$placeofbirth',`schooladdr`='$schooladdr',`email`='$email',`yearlevel`='$yearlevel',`course`='$course',`age`='$age',`genaverage`='$genaverage',`civil_status`='$civil_status',`gender`='$gender',`school_type`='$school_type',`fathername`='$fathername',`mothername`='$mothername',`motheraddress`='$motheraddress',`fatheraddress`='$fatheraddress',`fatheroccup`='$fatheroccup',`motheroccup`='$motheroccup',`fathereducattain`='$fathereducattain',`mothereducattain`='$mothereducattain',`gross`='$gross',`sibling`='$sibling',`fatherstat`='$fatherstat',`motherstat`='$motherstat',`intend`='$intend',`brgy`='$brgy',`disability`='$disability' WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";

  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Data updated successfully";
  } else {echo "Data updated successfully";
    echo "Failed: " . mysqli_error($con);
  }
}

?>
<?php 
if(isset($_POST['scholar'])){


	$select = "UPDATE students SET status = 'scholars' WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);
  if ($resut) {
    header("Location: table.php?msg=Successfully Add to Scholar");
  } else {
    echo "Failed: " . mysqli_error($con);
  }
    

}


 ?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Edit Student Profile</title>
</head>

<body>

  <div class="container" >
  <form class="application-form" id="scholarshipForm"  method="post">
    

  <!-- <form class="application-form" id="scholarshipForm"> -->
    

    <!-- <div class="col">
            <label class="form-label">Username:</label>
            <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>">
          </div> -->

    <?php
    $sql = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">

      <div class="form-section" id="section-1">
                <h2>Edit Personal Information</h2>
                <section>
    <div class="profile-box box-left" id="container1">

   
   
   
    <div class="row mb-3" id="con2">
                                    <div class="mb-3 last" id="name2" >
                                        <label>First Name</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="fname" value="<?php echo $row['fname'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Last Name</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="lname" value="<?php echo $row['lname'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Middle Name</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="mname" value="<?php echo $row['mname'] ?>">
                                        </p>
                                    </div>

                                    <div class="mb-3 last" id="name2" >
                                        <label>Birth Date</label>
                                        <p>
                                        <input type="text" class="form-control" name="birth" value="<?php echo $row['birth'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Age</label>
                                        <p>
                                        <input type="text" class="form-control" name="age" value="<?php echo $row['age'] ?>">
                                        </p>
                                    </div>
                                    
                                    
                                    
                                    

                                    
                                    
                                    
    </div>
  </section>
                
                <button class="next-btn next " type="button" onclick="nextSection()">Next</button>
            </div>


            <div class="form-section" id="section-2" style="display: none;">
                <h2> Edit Personal Information</h2>
                <section>
    <div class="profile-box box-left">

    

                                    
                                    <div class="row mb-3" id="con2">
                                    <div class="mb-3 last" id="name2" >
                                        <label>Citizenship</label>
                                        <p>
                                        <input type="text" class="form-control" name="citizen" value="<?php echo $row['citizen'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Place of Birth</label>
                                        <p>
                                        <input type="text" class="form-control" name="placeofbirth" value="<?php echo $row['placeofbirth'] ?>">
                                        </p>
                                    </div>

                                    <div class="mb-3 last" id="name2" >
                                        <label>Sex</label>
                                        <p>
                                        <input type="text" class="form-control" name="gender" value="<?php echo $row['gender'] ?>">
                                        </p>
                                    </div>
                                    
                                    <div class="mb-3 last" id="name2" >
                                        <label>Civil Status</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="civil_status" value="<?php echo $row['civil_status'] ?>">
                                        </p>
                                    </div>

                                    <div class="mb-3 last" id="name2" >
                                        <label>Baranggay</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="brgy" value="<?php echo $row['brgy'] ?>">
                                        </p>
                                        
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Email Address</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                                        </p>
                                    </div>
                                    </div>
                                  
                                   
                    
                                    
                                     
    </div>
  </section>

                <button class="prev-btn next" type="button" onclick="prevSection()">Previous</button>


                <button class="next-btn next" type="button" onclick="nextSection()">Next</button>
            </div>
            
            <div class="form-section" id="section-2" style="display: none;">
                <h2>Edit Educational Information</h2>
                <section>
    <div class="profile-box box-left">

    <div class="row mb-3" id="con2">
                                    

                                    <div class="mb-3 last" id="name2" >
                                        <label>School Name</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="school" value="<?php echo $row['school'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>School Address</label>
                                       
                                        <p>
                                        <input type="text" class="form-control" name="schooladdr" value="<?php echo $row['schooladdr'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>School Intended to Enroll In</label>
                                       
                                        <p>
                                        <input type="text" class="form-control" name="intend" value="<?php echo $row['intend'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Course</label>
                                       
                                        <p>
                                        <input type="text" class="form-control" name="course" value="<?php echo $row['course'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Year Level</label>
                                       
                                        <p>
                                        <input type="text" class="form-control" name="yearlevel" value="<?php echo $row['yearlevel'] ?>">
                                        </p>
                                    </div>
                                </div>
                               
    </div>
  </section>
  


                <button class="prev-btn next" type="button" onclick="prevSection()">Previous</button>


                <button class="next-btn next" type="button" onclick="nextSection()">Next</button>
            </div>

            <div class="form-section" id="section-2" style="display: none;">
                <h2>Educational Information</h2>
                <section>
    <div class="profile-box box-left">

    <div class="row mb-3" id="con2">
                                    

                                    <div class="mb-3 last" id="name2" >
                                        <label>Mobile Number</label>
                                       
                                        <p>
                                        <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>General Average</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="genaverage" value="<?php echo $row['genaverage'] ?>">
                                        </p>
                                        
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Type of School</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="school_type" value="<?php echo $row['school_type'] ?>">
                                        </p>
                                        
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Type of Disability</label>
                                       
                                        <p>
                                        <input type="text" class="form-control" name="disability" value="<?php echo $row['disability'] ?>">
                                        </p>
                                    </div>
                                   
                                </div>
                               
    </div>
  </section>
  


                <button class="prev-btn next" type="button" onclick="prevSection()">Previous</button>


                <button class="next-btn next" type="button" onclick="nextSection()">Next</button>
            </div>

            <div class="form-section" id="section-2" style="display: none;">
                <h2>Educational Information</h2>
                <section>
    <div class="profile-box box-left">

    <div class="row mb-3" id="con2">
                                    

                                    <div class="mb-3 last" id="name2" >
                                        <label>Fathers Living</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="fatherstat" value="<?php echo $row['fatherstat'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Fathers Name</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="fathername" value="<?php echo $row['fathername'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Fathers Address</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="fatheraddress" value="<?php echo $row['fatheraddress'] ?>">
                                        </p>
                                        
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Fathers Occupatio </label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="fatheroccup" value="<?php echo $row['fatheroccup'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Fathers Educational Attainment</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="fathereducattain" value="<?php echo $row['fathereducattain'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Total Parent Gross Income</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="gross" value="<?php echo $row['gross'] ?>">
                                        </p>
                                    </div>
                                </div>

                                
    </div>
  </section>
  


                <button class="prev-btn next" type="button" onclick="prevSection()">Previous</button>


                <button class="next-btn next" type="button" onclick="nextSection()">Next</button>
            </div>

            <div class="form-section" id="section-2" style="display: none;">
                <h2>FAMILY BACKGROUND</h2>
                <section>
    <div class="profile-box box-left">

    
    <div class="row mb-3" id="con2">
                                    

                                    <div class="mb-3 last" id="name2" >
                                        <label>Mothers Living</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="motherstat" value="<?php echo $row['motherstat'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Mothers Name</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="mothername" value="<?php echo $row['mothername'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Mothers Address</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="motheraddress" value="<?php echo $row['motheraddress'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Mothers Occupation</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="motheroccup" value="<?php echo $row['motheroccup'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Mothers Educational Attainment</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="mothereducattain" value="<?php echo $row['mothereducattain'] ?>">
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>NO. of Siblings in The Family</label>
                                        
                                        <p>
                                        <input type="text" class="form-control" name="sibling" value="<?php echo $row['sibling'] ?>">
                                        </p>
                                    </div>
                                </div>
                                

    </div>
  </section>
  <div class="button" style="float: right; padding-top: 25px;">
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>

      <button class="prev-btn next" type="button" onclick="prevSection()">Previous</button>


                <!-- <button class="submit-btn" type="submit">Submit Application</button> -->
            </div>
        
        
        <!-- <div class="button">
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <button type="submit" class="btn btn-primary" name="scholar">Accept</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div> -->
    


      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="script.js"></script>
</body>

</html>