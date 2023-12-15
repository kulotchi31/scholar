<!DOCTYPE html>
<html lang="en">

<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-image: url(pic1.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 500px;
    background-attachment: fixed;
}
.container {
    padding: 50px;
  background: white;
  opacity: calc(0.9);
}

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
 div {
            padding: 10px 0;
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
    width:47%;
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
width:47%;
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


</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Scholarship Application Form</title>
</head>
<body>
    <div class="container">
        <form class="application-form" id="scholarshipForm" action="submit.php" method="post">
            <div class="form-section" id="section-1">
                <h2>Personal Information</h2>
                <div class="fname">
<!-- <label> Firstname </label>  -->
<input id="fullname" type="text" name="fname" placeholder= "Firstname" required /> 
<!-- <label> Middlename: </label>  -->
<input id="fullname" type="text" name="mname" placeholder="Middlename"  required /> 
<!-- <label> Lastname: </label>   -->
<input id="fullname" type="text" name="lname" placeholder="Lastname"  required/> 
</div>

<div class="year"> 
<input id="year1" type="text" name="birth" placeholder="Birth Date" required />  
<input id="year1" type="text" name="age" placeholder="Age" required /> 
</div>

<div class="year" id="lev"> 
<input id="year1" type="text" name="yearlevel" placeholder="Year level" required />  
<input id="year1" type="text" name="course" placeholder="Course" required /> 
</div>








<!-- <div>
    <label> 
    Course :
    </label> 

    <select>
    <option value="Course">Course</option>
    <option value="BCA">BCA</option>
    <option value="BBA">BBA</option>
    <option value="B.Tech">B.Tech</option>
    <option value="MBA">MBA</option>
    <option value="MCA">MCA</option>
    <option value="M.Tech">M.Tech</option>
    </select>
</div> -->

<div>
<div class="year" >
<input id="year1" type="text" name="phone" placeholder="Phone no." size="10"  required/ > 
<input id="year1" type="text" name="email" placeholder="Email Address" required />
</div>
<div>
<div class="year" >
<input id="year1" type="text" name="school" placeholder="School Name" size="10" required/ > 
<input id="year1" type="text" name="schooladdr" placeholder="School Address" required />
</div>

<div>
<label for="brgy">Baranggay :</label>
<select name="brgy" id="brgy">
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
</div>

<div>
<div class="year2" >
<input id="year1" type="text" name="peraddress" placeholder="Current Address" size="10" required/ > 
<input id="year1" type="text" name="genaverage" placeholder="General Average" required  />
</div>

Civil Status :
</label><br>
<input type="checkbox" value="Single" name="civil_status" > Single 
<input type="checkbox" value="Married" name="civil_status"> Married

<br>
<label> 
Gender :
</label><br>
<input type="radio" value="Male" name="gender" > Male 
<input type="radio" value="Female" name="gender"> Female 
<br>
<label> 
School Type :
</label><br>
<input type="checkbox" value="Public" name="school_type" > Public 
<input type="checkbox" value="Private" name="school_type"> Private
<br>

                <button class="next-btn" type="button" onclick="nextSection()">Next</button>
            </div>
            <div class="form-section" id="section-2" style="display: none;">
                <h2>Educational Information</h2>
                <textarea name="address" placeholder="Address" required></textarea>
                <input type="text" name="school_name" placeholder="School Name" required>
                <textarea name="school_address" placeholder="School Address" required></textarea>
                <input type="text" name="year_level" placeholder="Year Level" required>
                <input type="tel" name="mobile_number" placeholder="Mobile Number" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="course" placeholder="Course" required>
                <input type="text" name="average" placeholder="Average" required>
                <input type="text" name="disability" placeholder="Type of Disability">
                <button class="prev-btn" type="button" onclick="prevSection()">Previous</button>


                <button class="next-btn" type="button" onclick="nextSection()">Next</button>
            </div>
            <div class="form-section" id="section-2" style="display: none;">
                <h2>FAMILY BACKGROUND</h2>
                <div class="row">
        <div class="col-6">
          <input type="checkbox" name="fatherliving" value="1"> Father Living
        </div>
        <div class="col-6">
          <input type="checkbox" name="motherliving" value="1"> Mother Living
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <input type="text" name="fathername" placeholder="Father's Name" disabled>
        </div>
        <div class="col-6">
          <input type="text" name="mothername" placeholder="Mother's Name" disabled>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <input type="text" name="fatheraddress" placeholder="Father's Address" disabled>
        </div>
        <div class="col-6">
          <input type="text" name="motheraddress" placeholder="Mother's Address" disabled>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <input type="text" name="fatheroccupation" placeholder="Father's Occupation" disabled>
        </div>
        <div class="col-6">
          <input type="text" name="motheroccupation" placeholder="Mother's Occupation" disabled>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <input type="text" name="fathereducationalattainment" placeholder="Father's Educational Attainment" disabled>
        </div>
        <div class="col-6">
          <input type="text" name="mothereducationalattainment" placeholder="Mother's Educational Attainment" disabled>
        </div>
      </div>
      <button class="prev-btn" type="button" onclick="prevSection()">Previous</button>




                <button class="submit-btn" type="submit">Submit Application</button>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
