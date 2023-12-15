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
padding: 10px 0;


}
#year1{
margin-top: 0px;
margin-bottom: 0px;
width:47%;
background-color: lightgray;
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




.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
    
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


</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Scholarship Application Form</title>
</head>
<body>
    <div class="container">
        <form class="application-form" id="scholarshipForm" action="submit.php" method="post">
            <div class="form-section" id="section-1" >
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
<input id="year1" type="text" name="birth" placeholder="Birth Date" onfocus="(this.type='date')" required />  
<input id="year1" type="text" name="age" placeholder="Age" required /> 
</div>

<div class="year"> 
<input id="year1" type="text" name="citizen" placeholder="Citizenship" required />  
<input id="year1" type="text" name="placeofbirth" placeholder="Place of Birth" required /> 
</div>

<div class="year">
<select id="year1" name="sex" required>
                    <option value="" disabled selected>Sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <select id="year1" name="civil_status" required>
                    <option value="" disabled selected>Civil Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widowed">Widowed</option>
                </select> 
 
</div>
                
                <button class="next-btn" type="button" onclick="nextSection()">Next</button>
            </div>


            <div class="form-section" id="section-2" style="display: none;">
                <h2>Educational Information</h2>
                <div> 
<input  type="text" name="address" placeholder="Address" required />  
<input  type="text" name="school" placeholder="School Name " required />
<input  type="text" name="sadd" placeholder="School Address " required />
<input  type="text" name="email" placeholder="Email Address " required />
<input  type="text" name="intend" placeholder="School Intended to Enroll in" required />
</div>

                <button class="prev-btn" type="button" onclick="prevSection()">Previous</button>


                <button class="next-btn" type="button" onclick="nextSection()">Next</button>
            </div>
            
            <div class="form-section" id="section-2" style="display: none;">
                <h2>Educational Information</h2>
                <div> 
                <div class="year"> 
<input id="year1" type="text" name="course" placeholder="Course" required />                  
<input id="year1" type="text" name="yearlevel" placeholder="Year Level" required />   
</div>

<div class="year"> 
<input id="year1" type="text" name="phone" placeholder="Mobile Number" required />                  
<input id="year1" type="text" name="genaverage" placeholder="General Average" required />
</div>

<div class="year">
<select id="year1" name="School_type" required>
                    <option value="" disabled selected>School Type</option>
                    <option value="public">Public</option>
                    <option value="private">Public</option>
                </select>
                
<input id="year1" type="text" name="disable" placeholder="Type of Disability" required />                   

                <!-- <div> 
<input  type="text" name="address" placeholder="Address" required />  
</div>
  -->
</div>

<div> 
<input  type="text" name="address" placeholder="baranggay" required />  
</div>

          
</div>


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

      <button class="prev-btn" type="button" onclick="prevSection()">Previous</button>


            


                <button class="submit-btn" type="submit">Submit Application</button>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
    
</body>
</html>


