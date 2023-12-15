<?php 

  session_start();
  if(isset($_SESSION['username'], $_SESSION['password'])) {

require 'connect.php';
require 'functions.php'; 
include('includes/headerscho.php'); 
include('includes/navscho.php'); 

 
    

?>



<body>

<style>






hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn:hover {
  opacity: 1;
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
    width: 45%;
    padding: 30px;
    margin-top: -55px;
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
    justify-content: center;
    align-items: center;
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
button{
    border-radius: 30%;
    color: aliceblue;
    background: linear-gradient(to bottom left, #0033cc 32%, #33ccff 77%);
   

}
button[disabled]{
  border: 1px solid #999999;
  background-color: #cccccc;
  color: #cccccc;
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
    $sql = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
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


<a href="process.php" style="float: right; margin-right: 20px; margin-top: -60px;">
  <button <?php if ($disableButton) echo 'disabled'; ?>>Renewal</button>
</a>

<?php
    $sql = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container">
        <form class="application-form" id="scholarshipForm" action="submit.php" method="post">
            <div class="form-section" id="section-1">
                <h2>Personal Information</h2>
                <section>
    <div class="profile-box box-left" id="container1">

   
   
   
    <div class="row mb-3" id="con2">
                                    <div class="mb-3 last" id="name2" >
                                        <label>Full Name</label>
                                        <p class="form-control">
                                            <?=$row['lname'], ', ' ,$row['fname'],', ',$row['mname'], '.'?>
                                    
                                    </div>

                                    <div class="mb-3 last" id="name2" >
                                        <label>Birth Date</label>
                                        <p class="form-control">
                                            <?=$row['birth'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Age</label>
                                        <p class="form-control">
                                            <?=$row['age'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Citizenship</label>
                                        <p class="form-control">
                                            <?=$row['citizen'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Place of Birth</label>
                                        <p class="form-control">
                                            <?=$row['placeofbirth'];?>
                                        </p>
                                    </div>
                                    

                                    
                                    
                                    
    </div>
  </section>
                
                
                <button class="next-btn next " type="button" onclick="nextSection()">Next</button>
            </div>


            <div class="form-section" id="section-2" style="display: none;">
                <h2>Personal Information</h2>
                <section>
    <div class="profile-box box-left">

    

                                    
                                    <div class="row mb-3" id="con2">

                                    <div class="mb-3 last" id="name2" >
                                        <label>Sex</label>
                                        <p class="form-control">
                                            <?=$row['gender'];?>
                                        </p>
                                    </div>
                                    
                                    <div class="mb-3 last" id="name2" >
                                        <label>Civil Status</label>
                                        <p class="form-control">
                                            <?=$row['civil_status'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3 last" id="name2" >
                                        <label>Baranggay</label>
                                        <p class="form-control">
                                            <?=$row['brgy'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Email Address</label>
                                        <p class="form-control">
                                            <?=$row['email'];?>
                                        </p>
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
                                        <label>School Name</label>
                                        <p class="form-control">
                                            <?=$row['school'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>School Address</label>
                                        <p class="form-control">
                                            <?=$row['schooladdr'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>School Intended to Enroll In</label>
                                        <p class="form-control">
                                            <?=$row['intend'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Course</label>
                                        <p class="form-control">
                                            <?=$row['course'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Year Level</label>
                                        <p class="form-control">
                                            <?=$row['yearlevel'];?>
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
                                        <p class="form-control">
                                            <?=$row['phone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>General Average</label>
                                        <p class="form-control">
                                            <?=$row['genaverage'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Type of School</label>
                                        <p class="form-control">
                                            <?=$row['school_type'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Type of Disability</label>
                                        <p class="form-control">
                                            <?=$row['disability'];?>
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
                                        <p class="form-control">
                                            <?=$row['fatherstat'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Fathers Name</label>
                                        <p class="form-control">
                                            <?=$row['fathername'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Fathers Address</label>
                                        <p class="form-control">
                                            <?=$row['fatheraddress'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Fathers Occupatio </label>
                                        <p class="form-control">
                                            <?=$row['fatheroccup'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Fathers Educational Attainment</label>
                                        <p class="form-control">
                                            <?=$row['fathereducattain'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Total Parent Gross Income</label>
                                        <p class="form-control">
                                            <?=$row['gross'];?>
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
                                        <p class="form-control">
                                            <?=$row['motherstat'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Mothers Name</label>
                                        <p class="form-control">
                                            <?=$row['mothername'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Mothers Address</label>
                                        <p class="form-control">
                                            <?=$row['motheraddress'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Mothers Occupation</label>
                                        <p class="form-control">
                                            <?=$row['motheroccup'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>Mothers Educational Attainment</label>
                                        <p class="form-control">
                                            <?=$row['mothereducattain'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 last" id="name2" >
                                        <label>NO. of Siblings in The Family</label>
                                        <p class="form-control">
                                            <?=$row['sibling'];?>
                                        </p>
                                    </div>
                                </div>
    

    </div>
  </section>

      <button class="prev-btn next" type="button" onclick="prevSection()">Previous</button>
      <div class="options">
        <a class="btn btn-primary" style="float: right;" href="editprofile.php">Edit</a>
      </div>
      


                <!-- <button class="submit-btn" type="submit">Submit Application</button> -->
            </div>
        </form>
    </div>
    <script src="script.js"></script>
    
</body>
</html>

<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php


  } else {
    header("location:login.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>







