<style>



input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  background-color: lightgray;
  
}
input[type=text]:focus, input[type=password]:focus {
  background-color: aquamarine;
  outline: none;
  
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;

}
.registerbtn:hover {
  opacity: 1;
}
#fullname{
  
    margin-top: 0px;
    margin-bottom: 10px;
    width:47%;
    width: 30.50%;
    background-color: lightgray;
    text-transform: capitalize;
    
}
.fname{

    align-items: baseline;
}
.year{
    margin-top: 0px;

    

}
#year1{
    margin-top: 0px;
    margin-bottom: 0px;
    width:100%;
    text-transform: capitalize;
    
}
#no{
    width:96.60%; 
}
#lev{
    margin-top: 10px;
}
#next{
    background: blue;
    color: aliceblue;
    margin-top: 20px;
}
.year2{
    margin-bottom: 20px;
    text-transform: capitalize;
}
.fname{

align-items: baseline;
}
.year{
margin-top: 0px;
padding: 10px 0;


}
#year1{
margin-top: 0px;
margin-bottom: 0px;
width:47%;
background-color: lightgray;
margin-top: 0px;
margin-bottom: 0px;
width:47%;
text-transform: capitalize;
}
#no{
width:96.60%; 
}
#lev{
margin-top: 10px;
}
#next{
background: blue;
color: aliceblue;
margin-top: 20px;
}
.year2{
margin-bottom: 20px;
text-transform: capitalize;
}
.parent{
align-items: baseline;
}
#father{
width:47%;
margin-left: 20px;

}
::placeholder{
  font-weight: normal;
  color: black;
}




.container {
    background:linear-gradient(to bottom, #aeb7ee, #e994c5); /* Gradient background */
    display: flex;
    justify-content: center;
    align-items: center;
    height:100% ;
    width: 100%;
    margin-left: -10px;
    padding-right: 17px;
    margin-top: -10px;
    padding-bottom: 10px;
    
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

.application-form input[type="text"],
.application-form input[type="tel"],
.application-form input[type="email"],
.application-form select,
.application-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.application-form select {
    appearance: none;
    padding-right: 25px;
    background: url('arrow-down.png') no-repeat right center;
    background-size: 20px 20px;
}

.application-form textarea {
    resize: vertical;
    height: 100px;
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

.submit-btn {
    display: block;
    margin: 20px auto 0;
}

.submit-btn:hover,
.prev-btn:hover,
.next-btn:hover {
    background-color: #0056b3;
}
#liv2{
    margin-left: 120px;
}
#select{
    background-color: lightgray;
    
    
}
#liv2{
    margin-left: 125px;
}
#liv3{
    margin-left: 110px;
}

#myInput{
margin-top: 0px;
margin-bottom: 0px;
width:47%;
background-color: lightgray;

}
#birthday{
  margin-top: 0px;
margin-bottom: 0px;
width:47%;
background-color: lightgray;
margin-top: 0px;
margin-bottom: 0px;
width:47%;
}

#age{
  margin-top: 0px;
margin-bottom: 0px;
width:47%;
background-color: lightgray;
margin-top: 0px;
margin-bottom: 0px;
width:47%;
}
#id{
  background-color: lightgray;
  
}





</style>
<?php

include 'connect.php';

if(isset($_POST['submit'])){

  $inputValue = $_POST["fname"];
  $inputValue1 = $_POST["mname"];
  $inputValue2 = $_POST["lname"];
  $inputValue3 = $_POST["citizen"];
  $inputValue4 = $_POST["placeofbirth"];
   $inputValue5 = $_POST["suffix"];
  // $inputValue5 = $_POST["school"];
  // $inputValue6 = $_POST["schooladdr"];
  // $inputValue7 = $_POST["fathername"];
  // $inputValue8 = $_POST["mothername"];
  // $inputValue9 = $_POST["fatheraddress"];
  // $inputValue10 = $_POST["motheraddress"];
  // $inputValue11 = $_POST["fatheroccup"];
  // $inputValue12 = $_POST["motheroccup"];
  // $inputValue13 = $_POST["fathereducattain"];
  // $inputValue14 = $_POST["mothereducattain"];
  $inputValue15 = $_POST["intend"];
  $inputValue16 = $_POST["brgy"];

    // Capitaize the inpu6
    $capitalizedInput = ucwords(strtolower($inputValue));
    $capitalizedInput1 = ucwords(strtolower($inputValue1));
    $capitalizedInput2 = ucwords(strtolower($inputValue2));
    $capitalizedInput3 = ucwords(strtolower($inputValue3));
    $capitalizedInput4 = ucwords(strtolower($inputValue4));
     $capitalizedInput5 = ucwords(strtolower($inputValue5));
    // $capitalizedInput5 = ucwords(strtolower($inputValue5));
    // $capitalizedInput6 = ucwords(strtolower($inputValue6));
    // $capitalizedInput7 = ucwords(strtolower($inputValue7));
    // $capitalizedInput8 = ucwords(strtolower($inputValue8));
    // $capitalizedInput9 = ucwords(strtolower($inputValue9));
    // $capitalizedInput10 = ucwords(strtolower($inputValue10));
    // $capitalizedInput11 = ucwords(strtolower($inputValue11));
    // $capitalizedInput12 = ucwords(strtolower($inputValue12));
    // $capitalizedInput13 = ucwords(strtolower($inputValue13));
    // $capitalizedInput14 = ucwords(strtolower($inputValue14));
    $capitalizedInput15 = ucwords(strtolower($inputValue15));
    $capitalizedInput16 = ucwords(strtolower($inputValue16));


   $fname = mysqli_real_escape_string($con, $_POST['fname']);
   $mname = mysqli_real_escape_string($con, $_POST['mname']);
   $lname = mysqli_real_escape_string($con, $_POST['lname']);
   $suffix = mysqli_real_escape_string($con, $_POST['suffix']);
   $birth = mysqli_real_escape_string($con, $_POST['birth']);



    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $school = mysqli_real_escape_string($con, $_POST['school']);
    $citizen = mysqli_real_escape_string($con, $_POST['citizen']);
    $placeofbirth = mysqli_real_escape_string($con, $_POST['placeofbirth']);


    $email = mysqli_real_escape_string($con, $_POST['email']);
    $yearlevel = mysqli_real_escape_string($con, $_POST['yearlevel']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
 
    $genaverage = mysqli_real_escape_string($con, $_POST['genaverage']);
    $civil_status = mysqli_real_escape_string($con, $_POST['civil_status']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    // $fatheraddress = mysqli_real_escape_string($con, $_POST['fatheraddress']);
    // $fathername = mysqli_real_escape_string($con, $_POST['fathername']);
    // $mothername = mysqli_real_escape_string($con, $_POST['mothername']);
    // $motheraddress = mysqli_real_escape_string($con, $_POST['motheraddress']);
    // $fatheroccup = mysqli_real_escape_string($con, $_POST['fatheroccup']);
    // $motheroccup = mysqli_real_escape_string($con, $_POST['motheroccup']);
    // $fathereducattain = mysqli_real_escape_string($con, $_POST['fathereducattain']);
    // $mothereducattain = mysqli_real_escape_string($con, $_POST['mothereducattain']);
    // $gross = mysqli_real_escape_string($con, $_POST['gross']);
    // $sibling = mysqli_real_escape_string($con, $_POST['sibling']);

    // $fatherstat = mysqli_real_escape_string($con, $_POST['fatherstat']);
    // $motherstat = mysqli_real_escape_string($con, $_POST['motherstat']);

    $intend = mysqli_real_escape_string($con, $_POST['intend']);
    $brgy = mysqli_real_escape_string($con, $_POST['brgy']);

    // $municipality = mysqli_real_escape_string($con, $_POST['municipality']);
    // $province = mysqli_real_escape_string($con, $_POST['province']);
    // $disability = mysqli_real_escape_string($con, $_POST['disability']);
    

   // $tax_img = $_FILES['tax_img']['name'];
   // $image_size = $_FILES['tax_img']['size'];
   // $image_tmp_name5 = $_FILES['tax_img']['tmp_name'];
   // $image_folder5 = 'upload/'.$tax_img;

   // $cor_img = $_FILES['cor_img']['name'];
   // $image_size = $_FILES['cor_img']['size'];
   // $image_tmp_name4 = $_FILES['cor_img']['tmp_name'];
   // $image_folder4 = 'upload/'.$cor_img;

   // $cog_img = $_FILES['cog_img']['name'];
   // $image_size = $_FILES['cog_img']['size'];
   // $image_tmp_name3 = $_FILES['cog_img']['tmp_name'];
   // $image_folder3 = 'upload/'.$cog_img;

   // $report_img = $_FILES['report_img']['name'];
   // $image_size = $_FILES['report_img']['size'];
   // $image_tmp_name2 = $_FILES['report_img']['tmp_name'];
   // $image_folder2 = 'upload/'.$report_img;

   $brgclear_img = $_FILES['brgclear_img']['name'];
   $image_size = $_FILES['brgclear_img']['size'];
   $image_tmp_name1 = $_FILES['brgclear_img']['tmp_name'];
   $image_folder1 = 'upload/'.$brgclear_img;

   $moral_img = $_FILES['moral_img']['name'];
   $image_size = $_FILES['moral_img']['size'];
   $image_tmp_name = $_FILES['moral_img']['tmp_name'];
   $image_folder = 'upload/'.$moral_img;


 
   $checkUser = "SELECT * FROM students WHERE (birth = '$birth' AND fname = '$fname' AND lname = '$lname' AND mname = '$mname') ";
   $result = mysqli_query($con,$checkUser);
   $count = mysqli_num_rows($result);
   if($count>0){
         $message[] = '
         Our Scholarship Program Does Not Accept Duplicate Data!';
      }else{




        $query = "INSERT INTO students (fname,mname,lname,birth,suffix,citizen,placeofbirth,phone,fk_university_id,email,yearlevel,fk_course_id,genaverage,civil_status,gender,intend,brgy,brgclear_img,moral_img,status) VALUES('$fname','$mname','$lname','$birth','$suffix','$citizen','$placeofbirth','$phone','$school','$email','$yearlevel','$course','$genaverage','$civil_status','$gender','$intend','$brgy','$brgclear_img','$moral_img','Applicants') ";
         $query_run = mysqli_query($con, $query);
         if($query_run){
          // move_uploaded_file($image_tmp_name5, $image_folder5,);
          // move_uploaded_file($image_tmp_name4, $image_folder4,);
          // move_uploaded_file($image_tmp_name3, $image_folder3,);
          // move_uploaded_file($image_tmp_name2, $image_folder2,);
          move_uploaded_file($image_tmp_name1, $image_folder1,);
          move_uploaded_file($image_tmp_name, $image_folder,);

         
            
            // header('location:register.php');
            echo
            "
            <script>
            document.location.href = 'register.php';
            </script>
            ";
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
   
<div class="container" id="form-container">

   <form class="application-form" action="" method="post" id="scholarshipForm" enctype="multipart/form-data">
   <div class="form-section" id="section-1" >
   <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
                <h2>Personal Information</h2>
                
      
<div class="fname">
<!-- <label> Firstname </label>  -->
<input id="fullname" type="text" name="fname" placeholder= "First Name" required /> 
<!-- <label> Middlename: </label>  -->
<input id="fullname" type="text" name="mname" placeholder="Middle Name"  required /> 
<!-- <label> Lastname: </label>   -->
<input id="fullname" type="text" name="lname" placeholder="Last Name"  required/> 
<input id="fullname" type="text" name="suffix" placeholder="Suffix"  /> 
</div>


<!-- <div class="year"> 
<input id="year4" type="text" name="birth" placeholder="Birth Date" onfocus="(this.type='date')" required />  
<input id="year1" type="text" min="1" max="10" name="age" placeholder="Age" required /> 
</div> -->

<div class="year"> 
<input id="birthday" type="text" name="birth" placeholder="Birth Date" onfocus="(this.type='date')" onchange="calculateAge()" required />  

</div>



<div class="year"> 
<input id="myInput" type="text" name="citizen" value="Filipino" required />  
<input id="myInput" type="text" name="placeofbirth" placeholder="Place of Birth" required /> 
</div>

<div class="year">
<select id="year1" name="gender" required>
                    <option value="" disabled selected>Sex</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <select id="year1" name="civil_status" required>
                    <option value="" disabled selected>Civil Status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                </select> 
 
</div>

<div class="fname">
<!-- <label> Firstname </label>  -->
<select id="fullname" name="brgy" required>
                    <option value="" disabled selected>Baranggay</option>
                    <option value="Baloc">Baloc</option>
	<option value="Buasao">Buasao</option>
	<option value="Burgos">Burgos</option>
	<option value="Cabugao">Cabugao</option>
  <option value="Casulucan">Casulucan</option>
	<option value="Conception">Conception</option>
	<option value="Comitang">Comitang</option>
  <option value="Dolores">Dolores</option>
	<option value="Gen.Luna">Gen.luna</option>
	<option value="Hulo">Hulo</option>
  <option value="Mabini">Mabini</option>
	<option value="Malasin">Malasin</option>
	<option value="Malaya">Malaya</option>
  <option value="Malayantoc">Malayantok</option>
	<option value="Mambarao">Mambarao</option>
	<option value="Poblacion">Poblacion</option>
  <option value="Pulong Buli">Pulong Buli</option>
	<option value="Sagaba">Sagaba</option>
	<option value="San Agustin">San Agustin</option>
  <option value="San Fabian">San Fabian</option>
	<option value="San Francisco">San Francisco</option>
	<option value="San Pascual">San Pascual</option>
  <option value="Sta Rita">Sta Rita</option>
  <option value="Sto Rosario">Sto Rosario</option>
                </select> 
</div>

<!-- <div class="year" > 
<select id="select" name="brgy" required>
                    <option value="" disabled selected>Baranggay</option>
                    <option value="baloc">Baloc</option>
	<option value="buasao">Buasao</option>
	<option value="burgos">Burgos</option>
	<option value="cabugao">Cabugao</option>
  <option value="casulucan">Casulucan</option>
	<option value="conception">Conception</option>
	<option value="comitang">Comitang</option>
  <option value="dolores">Dolores</option>
	<option value="gen.luna">Gen.luna</option>
	<option value="hulo">Hulo</option>
  <option value="mabini">Mabini</option>
	<option value="malasin">Malasin</option>
	<option value="malaya">Malaya</option>
  <option value="malayantoc">Malayantok</option>
	<option value="mambarao">Mambarao</option>
	<option value="poblacion">Poblacion</option>
  <option value="pulong buli">Pulong Buli</option>
	<option value="sagaba">Sagaba</option>
	<option value="san agustin">San Agustin</option>
  <option value="san fabian">San Fabian</option>
	<option value="san francisco">San Francisco</option>
	<option value="san pascual">San Pascual</option>
  <option value="sta rita">Sta Rita</option>
  <option value="sto rosario">Sto Rosario</option>
                </select> 
</div> -->


                
                <button class="next-btn" type="button" onclick="nextSection()">Next</button>
            </div>


            <div class="form-section" id="section-2" style="display: none;">
                <h2>Educational Information</h2>
                <div> 



<?php
$sql = "SELECT * FROM university_tbl";
$result = $con->query($sql);

$sql2 = "SELECT * FROM course_tbl";
$result2 = $con->query($sql2);


// Check if the query was successful


?>
 

<select id="id" name="school" required>
<option value="" disabled selected>School Name</option>

                  
                    <?php

                    if ($result) {

            // Loop through the results and output each name as an option
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['university_id'] . "'>" . $row['university_name'] . "</option>";
            }
        }
            ?>


                   
                   
                </select>



<input  type="text" name="email" placeholder="Email Address" required />
<input  id="id"type="text" name="intend" placeholder="School Intended to Enroll in" required />
</div>

                <button class="prev-btn" type="button" onclick="prevSection()">Previous</button>


                <button class="next-btn" type="button" onclick="nextSection()">Next</button>
            </div>
            
            <div class="form-section" id="section-2" style="display: none;">
                <h2>Educational Information</h2>
                <div>

                <!-- <div class="year"> 
<input id="year1" type="text" name="course" placeholder="Course" required />                  
<input id="year1" type="text" name="yearlevel" placeholder="Year Level" required />   
</div> -->

<div class="year">

    <select id="year1" name="course" required>
<option value="" disabled selected>Course</option>

                  
                    <?php

                    if ($result2) {

            // Loop through the results and output each name as an option
            while ($row = $result2->fetch_assoc()) {
                echo "<option value='" . $row['Course_ID'] . "'>" . $row['Course'] . "</option>";
            }
        }
            ?>


                   
                   
                </select>




                <select id="year1" name="yearlevel" required>
                    <option value="" disabled selected>Year Level</option>
                    <option value="Grade 9">1st Year</option>
                    <option value="Grade 10">2nd Year</option>
                    <option value="Grade 11">3rd Year</option>
                    <option value="Grade 12">4th Year</option>
                </select> 
 
</div>

<div class="year"> 
<input id="year1" type="text" name="phone" placeholder="Mobile Number" required />                  
<input id="year1" type="text" name="genaverage" placeholder="General Average" required />
</div>

<!-- <div class="year">
<select id="year1" name="school_type" required>
                    <option value="" disabled selected>School Type</option>
                    <option value="public">Public</option>
                    <option value="private">Private</option>
                </select>
                
<input id="year1" type="text" name="disability" placeholder="Type of Disability" required />                   
</div> -->

<!-- <div class="year">

                <select id="year1" name="disability" required>
                    <option value="" disabled selected>Type of Disability</option>
                    <option value="N/A">N/A</option>
                    <option value="Autistic Spectrum Disorders">Autistic Spectrum Disorders</option>
                    <option value="Blindness">Blindness</option>
                    <option value="Brain injuries">Brain injuries</option>
                    <option value="Cerebral palsy">Cerebral palsy</option>
                    <option value="Deaf or hard of hearing">Deaf or hard of hearing</option>
                    <option value="Developmental disability">Developmental disability</option>
                    <option value="Dyslexia">Dyslexia</option>
                    <option value="Dwarfism">Dwarfism</option>
                    <option value="Emotional disturbance">Emotional disturbance</option>
                    <option value="Epilepsy">Epilepsy</option>
                    <option value="Hearing">Hearing</option>
                    <option value="Hemophilia">Hemophilia</option>
                    <option value="Intellectua disability">Intellectua disability</option>
                    <option value="Impairment">Impairment</option>
                    <option value="Learnin disabilities">Learnin disabilities</option>
                    <option value="Lepros cure persons">Lepros cure persons</option>
                    <option value="Locmooto disability">Locmooto disability</option>
                    <option value="Multipl sclerosis">Multipl sclerosis</option>
                    <option value="Muscula dystrophy">Muscula dystrophy</option>
                    <option value="Physical">Physical</option>
                    <option value="Psychiatric">Psychiatric</option>
                    <option value="Speech">Speech</option>
                    <option value="Vision">Vision</option>
                    <option value="Vision disability">Vision disability</option>
                    <option value="Other">Other</option>
                </select> 
 
</div> -->

</div>


                <button class="prev-btn" type="button" onclick="prevSection()">Previous</button>


                <button class="next-btn" type="button" onclick="nextSection()">Next</button>
            </div>

           <!--  <div class="form-section" id="section-2" style="display: none;">
            <h2>FAMILY BACKGROUND</h2>
                <div class="row">
                    
         
                <div class="year">
<select id="year1" name="fatherstat" required>
                    <option value="" disabled selected>Father Status</option>
                    <option value="Living">Living</option>
                    <option value="Deceased">Deceased</option>
                </select>
                <select id="year1" name="motherstat" required>
                <option value="" disabled selected>Mother Status</option>
                    <option value="Living">Living</option>
                    <option value="Deceased">Deceased</option>
                </select> 
 
</div>
      

      <div class="year"> 
<input id="year1" type="text" name="fathername" placeholder="Father's Name" required />  
<input id="year1" type="text" name="mothername" placeholder="Mother's Name"  required/> 
</div>

<div class="year"> 
<input id="year1" type="text" name="fatheraddress" placeholder="Father's Address"  required/>  
<input id="year1" type="text" name="motheraddress" placeholder="Mother's Address"  required/> 
</div>

<div class="year"> 
<input id="year1" type="text" name="fatheroccup" placeholder="Father's Occupation"required/>  
<input id="year1" type="text" name="motheroccup" placeholder="Mother's Occupation" required /> 
</div>

<div class="year"> 
<input id="year1" type="text" name="fathereducattain" placeholder="Father's Educational Attainment"  required/>  
<input id="year1" type="text" name="mothereducattain" placeholder="Mother's Educational Attainment" required /> 
</div>

<!-- <div class="year"> 
<input id="year1" type="text" name="gross" placeholder="Total Parent Gross Income"  required/>  
<input id="year1" type="text" name="sibling" placeholder="No. of Siblings in the Family"  required/> 
</div> -->

<!-- <div class="year">
<select id="year1" name="gross" required>
                    <option value="" disabled selected>Total Parent Gross Income</option>
                    <option value="10,000">10,000</option>
                    <option value="15,000">15,000</option>
                    <option value="20,000">20,000</option>
                    <option value="25,000">25,000</option>
                    <option value="30,000">30,000</option>
                    <option value="40,000">40,000</option>
                    <option value="50,000">50,000</option>
                </select>
                
<input id="year1" type="text" name="sibling" placeholder="No. of Siblings in the Family" required />                   
</div>


</div> -->


           <!--      <button class="prev-btn" type="button" onclick="prevSection()">Previous</button>


                <button class="next-btn" type="button" onclick="nextSection()">Next</button>
            </div>
 -->
            

            <div class="form-section" id="section-2" style="display: none;">
                <h2>IMAGE REQUIREMENTS</h2>
                <div class="multiple">
                <div class="year">
<!-- <strong><label>TAX EXEMPTION</label></strong>
</div>
<div>
<input id="year1" type="file" name="tax_img" class="box" accept="image/jpg, image/jpeg, image/png">  
</div>

<div class="year">
<strong><label>CERTIFICATE OF REGISTRATION</label></strong>
</div>
<div>
<input id="year1" type="file" name="cor_img" class="box" accept="image/jpg, image/jpeg, image/png" >  
</div>

<div class="year">
<strong><label>CERTIFICATE  OF GRADES</label></strong>
</div>
<div>
<input id="year1" type="file" name="cog_img" class="box" accept="image/jpg, image/jpeg, image/png">  
</div>
<div class="year">
<strong><label>REPORT CARD</label><strong>
</div>
<div>
<input id="year1" type="file" name="report_img" class="box" accept="image/jpg, image/jpeg, image/png">  
</div> -->
<div class="year">
<strong><label>BARANGGAY CLEARANCE</label><strong>
</div>
<div>
<input id="year1" type="file" name="brgclear_img" class="box" accept="image/jpg, image/jpeg, image/png">  
</div>
<div class="year">
<strong><label>GOOD MORAL</label><strong> 
</div>
<div>
<input id="year1" type="file" name="moral_img" class="box" accept="image/jpg, image/jpeg, image/png">  
</div>

      <button class="prev-btn" type="button" onclick="prevSection()">Previous</button>
      <input class="submit-btn" type="submit" onclick="return checkreg()" name="submit" value="REGISTER NOW" class="btn" >
   </form>

</div>

</body>
</html>
<script src="script.js"></script>
<script>
    function checkreg(){
        return  confirm("Are you sure you want to REGISTER this data?"); 
    }
</script>


<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghan","Albanian","Algerian","American","Andorran","Angolan","Anguillan","Citizen of Antigua and Barbuda","Argentine","Armenian","Australian","Austrian","Azerbaijani","Bahamian","Bahraini","Bangladeshi","Barbadian","Belarusian","Belgian","Belizean","Beninese","Bermudian","Bhutanese","Bolivian","Citizen of Bosnia and Herzegovina","Botswanan","Brazilian","British","British Virgin Islander","Bruneian","Bulgarian","Burkinan","Burmese","Burundian","Cambodian","Cameroonian","Canadian","Cape Verdean","Cayman Islander","Central African","Chadian","Chilean","Chinese","Colombian","Comoran","Congolese(Congo)","Congolese(DRC)","Cook ","Costa Rican","Croatian","Cuban","Cymraes","Cymro","Cypriot","Czech","Danish","Djiboutian","Dominican","Citizen of the Dominican Republic","Dutch","East Timorese","Ecuadorean","Egyptian","Emirati","English","Equatorial Guinean","Eritrean","Estonian","Ethiopian","Faroese","Fijian","Filipino","Finnish","French","Gabonese","Gambian","Georgian","German","Ghanaian","Gibraltarian","Greek","Greenlandic","Grenadian","Guamanian","Guatemalan","Citizen of Guinea-Bissau","Guinean","Guyanese","Haitian","Honduran","Hong Konger","Hungarian","Icelandic","Indian","Indonesian","Iranian","Iraqi","Irish","Israeli","Italian","IvorianIcelandic","Indian","Indonesian","Iranian","Iraqi","Irish","Israeli","Italian","Ivorian","Jamaican","Japanese","Jordanian","Kazakh","Kenyan","Kittitian","Citizen of Kiribati","Kosovan","Kuwaiti	Kyrgyz","Lao","Latvian","Lebanese","Liberian","Libyan","Liechtenstein citizen","Lithuanian","Luxembourger","Macanese","Macedonian","Malagasy","Malawian","Malaysian","Maldivian","Malian","Maltese","Marshallese","Martiniquais","Mauritanian","Mauritian","Mexican","Micronesian","Moldovan","Monegasque","Mongolian","Montenegrin","Montserratian","Moroccan","Mosotho","Mozambican","Namibian","Nauruan","Nepalese","New Zealander","Nicaraguan","Nigerian","Nigerien","Niuean","North","Korean","Northern Irish","Norwegian","Omani","Pakistani","Palauan","Palestinian","Panamanian","Papua New Guinean","Paraguayan","Peruvian","Pitcairn Islander","Polish","Portuguese","Prydeinig","Puerto Rican","Qatari","Romanian","Russian","Rwandan","Salvadorean","Sammarinese","Samoan","Sao Tomean","Saudi","Arabian","Scottish","Senegalese","Serbian","Citizen of Seychelles","Sierra Leonean","Singaporean","Slovak","Slovenian","Solomon Islander","Somali","South African","South Korean","South","Sudanese","Spanish","Sri Lankan","St Helenian","St Lucian","Stateless","Sudanese","Surinamese","Swazi","Swedish","Swiss","Syrian","Taiwanese","Tajik","Tanzanian","Thai","Togolese","Tongan","Trinidadian","Tristanian","Tunisian","Turkish","Turkmen","Turks and Caicos Islander","Tuvaluan","Ugandan","Ukrainian","Uruguayan","Uzbek","Vatican citizen","Citizen of Vanuatu","Venezuelan","Vietnamese","Vincentian","Wallisian","Welsh","Yemeni","Zambian","Zimbabwean"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>

<script>
        function calculateAge() {
            var birthdayInput = document.getElementById('birthday').value;
            var birthday = new Date(birthdayInput);
            var today = new Date();

            var age = today.getFullYear() - birthday.getFullYear();

            // Adjust age if birthday hasn't occurred yet this year
            if (today.getMonth() < birthday.getMonth() || (today.getMonth() === birthday.getMonth() && today.getDate() < birthday.getDate())) {
                age--;
            }

            document.getElementById('age').value = age;
        }
    </script>
 


