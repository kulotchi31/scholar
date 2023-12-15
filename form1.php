<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
<body >


<?php include('message.php'); ?>
<form action="code.php" method="POST" style="width: 1250px; margin-left: 40px; ">
  <div class="container">
  <center>  <h1>PERSONAL INFORMATION</h1> </center>
  
  <div class="form">
  
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

<center>  <h1>FAMILY BACKGROUND</h1> </center>

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

<div class="year"> 
<input id="year1" type="text" name="gross" placeholder="Total Parent Gross Income"  required/>  
<input id="year1" type="text" name="sibling" placeholder="No. of Siblings in the Family"  required/> 
</div>

<label> 
Father :
</label> 
<input type="checkbox" value="Living" name="fatherstat" > Living 
<input type="checkbox" value="Deceased" name="fatherstat"> Deceased 
<br>
<label> 
Mother :
</label>
<input type="checkbox" value="Living" name="motherstat" >Living 
<input type="checkbox" value="Deceased" name="motherstat"> Deceased

<div> 
<input  type="text" name="intend" placeholder="School Intended to Enroll in" required />  
<input  type="text" name="sadd" placeholder="School Address " required /> 
</div>



<div class="mb-3">
      <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
      </div>




</div>
  </div>
</div>
</form>

</form>

</body>
  </html>

