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
    width: 1000px;



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

  #name {
    margin-right: 10px;

    width: 45%;
  }

  #name2 {
    margin-top: -7%;
    margin-right: 10px;
    width: 93%;

  }


  #name1 {
    margin-right: 8px;
    width: 30%;
  }

  #con {

    margin-top: -10%;
    margin-left: 6%;


  }

  #con1 {
    margin-left: 4%;
  }

  #con2 {
    margin-left: 6%;
    padding-top: 5%;
  }

  .last {
    margin-bottom: -50px;
  }

  .next {
    margin-top: -2%;
  }

  #con3 {
    margin-left: 6%;
    padding-top: -5%;
  }

  #con4 {
    margin-left: 6%;

  }

  #section-2 {
    padding-top: 7%;
  }

  .button {
    margin-top: -8%;
    margin-bottom: 3%;

  }

  button {
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
  $suffix = $_POST['suffix'];
  $birth = $_POST['birth'];
  $phone = $_POST['phone'];
  $school = $_POST['school'];
  $citizen = $_POST['citizen'];
  $placeofbirth = $_POST['placeofbirth'];
  $email = $_POST['email'];

  $yearlevel = $_POST['yearlevel'];
  $course = $_POST['course'];
  $genaverage = $_POST['genaverage'];
  $civil_status = $_POST['civil_status'];
  $gender = $_POST['gender'];


  $intend = $_POST['intend'];
  $brgy = $_POST['brgy'];





  $sql = "UPDATE `students` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`suffix`='$suffix',`birth`='$birth',`phone`='$phone',`fk_university_id`='$school',`citizen`='$citizen',`placeofbirth`='$placeofbirth',`email`='$email',`yearlevel`='$yearlevel',`fk_course_id`='$course',`genaverage`='$genaverage',`civil_status`='$civil_status',`gender`='$gender',`intend`='$intend',`brgy`='$brgy' WHERE   id = '" . $_SESSION['scholarid'] . "'";

  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Data updated successfully";
  } else {
    echo "Data updated successfully";
    echo "Failed: " . mysqli_error($con);
  }

}

?>
<?php
if (isset($_POST['scholar'])) {


  $select = "UPDATE students SET status = 'scholars' WHERE id = '$id' ";
  $resut = mysqli_query($con, $select);
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

  <div class="container">
    <form class="application-form" id="scholarshipForm" method="post">


      <!-- <form class="application-form" id="scholarshipForm"> -->


      <!-- <div class="col">
            <label class="form-label">Username:</label>
            <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>">
          </div> -->

      <?php
      $sql = "SELECT * FROM students WHERE username = '" . $_SESSION['username'] . "' AND password = '" . $_SESSION['password'] . "'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_assoc($result);
      $birthdate = $row['birth'];
      $currentDate = date("Y-m-d");

      $age = date_diff(date_create($birthdate), date_create($currentDate));

      $selectdisability = "SELECT * FROM disability_tbl WHERE fk_scholar_id = '$_SESSION[scholarid]'";
      $query = mysqli_query($con, $selectdisability);
      $resultdisability = mysqli_fetch_assoc($query);
      $count = mysqli_num_rows($query);

      if ($count == 0) {
        $disability = "";
      } else {
        $disability = $resultdisability['type_of_disability'];
      }



      ?>

      <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">

          <div class="form-section" id="section-1">
            <h2>Edit Personal Information</h2>
            <section>
              <div class="profile-box box-left" id="container1">




                <div class="row mb-3" id="con2">
                  <div class="mb-3 last" id="name2">
                    <label>First Name</label>

                    <p>
                      <input type="text" class="form-control" name="fname" value="<?php echo $row['fname'] ?>">
                    </p>
                  </div>
                  <div class="mb-3 last" id="name2">
                    <label>Last Name</label>

                    <p>
                      <input type="text" class="form-control" name="lname" value="<?php echo $row['lname'] ?>">
                    </p>
                  </div>
                  <div class="mb-3 last" id="name2">
                    <label>Middle Name</label>

                    <p>
                      <input type="text" class="form-control" name="mname" value="<?php echo $row['mname'] ?>">
                    </p>
                  </div>

                      <div class="mb-3 last" id="name2">
                    <label>Suffix</label>

                    <p>
                      <input type="text" class="form-control" name="suffix" value="<?php echo $row['suffix'] ?>">
                    </p>
                  </div>

                  <div class="mb-3 last" id="name2">
                    <label>Birth Date</label>
                    <p>
                      <input type="text" class="form-control" name="birth" value="<?php echo $row['birth'] ?>">
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
                  <div class="mb-3 last" id="name2">
                    <label>Citizenship</label>
                    <p>
                      <input type="text" class="form-control" name="citizen" value="<?php echo $row['citizen'] ?>">
                    </p>
                  </div>
                  <div class="mb-3 last" id="name2">
                    <label>Place of Birth</label>
                    <p>
                      <input type="text" class="form-control" name="placeofbirth" value="<?php echo $row['placeofbirth'] ?>">
                    </p>
                  </div>

                  <div class="mb-3 last" id="name2">
                    <label>Sex</label>
                    <p>
                      <input type="text" class="form-control" name="gender" value="<?php echo $row['gender'] ?>">
                    </p>
                  </div>

                  <div class="mb-3 last" id="name2">
                    <label>Civil Status</label>

                    <p>
                      <input type="text" class="form-control" name="civil_status" value="<?php echo $row['civil_status'] ?>">
                    </p>
                  </div>

                  <div class="mb-3 last" id="name2">
                    <label>Baranggay</label>

                    <p>
                      <input type="text" class="form-control" name="brgy" value="<?php echo $row['brgy'] ?>">
                    </p>

                  </div>
                  <div class="mb-3 last" id="name2">
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


                  <?php
$sql = "SELECT * FROM university_tbl";
$result = $con->query($sql);

$sql2 = "SELECT * FROM course_tbl";
$result2 = $con->query($sql2);


// Check if the query was successful


?>
  


                   
                   
                </select>




                  <div class="mb-3 last" id="name2">

                           <label>School</label>

                     <select id="id" name="school" required>
<option value="" disabled selected>School Name</option>

                  
                    <?php

                    if ($result) {

            // Loop through the results and output each name as an option
            while ($row1 = $result->fetch_assoc()) {
                if($row["university_id"]==$row1["fk_university_id"]){


                       echo "<option selected value='" . $row1['university_id'] . "'>" . $row1['university_name'] . "</option>";
                }
                else
                {

                    echo "<option  value='" . $row1['university_id'] . "'>" . $row1['university_name'] . "</option>";
                }

                
               
            }
        }
            ?>

          </select>


                   
                   
                  </div>
             
                  <div class="mb-3 last" id="name2">
                    <label>School Intended to Enroll In</label>

                    <p>
                      <input type="text" class="form-control" name="intend" value="<?php echo $row['intend'] ?>">
                    </p>
                  </div>
                  <br>
                  <div class="mb-3 last" id="name2">
                    <label>Course</label>

                                        <select id="id" name="course" required>
<option value="" disabled selected>Course</option>

                  
                    <?php

                    if ($result2) {

            // Loop through the results and output each name as an option
            while ($row2 = $result2->fetch_assoc()) {
                if($row2["Course_ID"]==$row["fk_course_id"]){

                  echo "<option selected value='" . $row2['Course_ID'] . "'>" . $row2['Course'] . "</option>";
                }
                else
                {

                    echo "<option  value='" . $row2['Course_ID'] . "'>" . $row2['Course'] . "</option>";
                }
               
            }
        }
            ?>

          </select>





                
                  </div>
                  <div class="mb-3 last" id="name2">
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


                  <div class="mb-3 last" id="name2">
                    <label>Mobile Number</label>

                    <p>
                      <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'] ?>">
                    </p>
                  </div>
                  <div class="mb-3 last" id="name2">
                    <label>General Average</label>

                    <p>
                      <input type="text" class="form-control" name="genaverage" value="<?php echo $row['genaverage'] ?>">
                    </p>

                  </div>
          
                  

                </div>

              </div>
            </section>



            <button class="prev-btn next" type="button" onclick="prevSection()">Previous</button>


              <div class="button" style="float: right; padding-top: 25px;">
              <button type="submit" class="btn btn-success" name="submit">Update</button>
              <a href="homescho.php" class="btn btn-danger">Cancel</a>
            </div>

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