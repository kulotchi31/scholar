<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Scholarship Application Form</title>
</head>
<body>
    <div class="container">
        <form class="application-form" id="scholarshipForm" action="submit.php" method="post">
            <div class="form-section" id="section-1">
                <h2>Personal Information</h2>
                <input type="text" name="last_name" placeholder="Last Name" required>
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="middle_name" placeholder="Middle Name">
                <input type="date" name="birthdate" required>
                <input type="text" name="citizenship" placeholder="Citizenship" required>
                <input type="text" name="place_of_birth" placeholder="Place of Birth" required>
                <select name="sex" required>
                    <option value="" disabled selected>Select Sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <select name="civil_status" required>
                    <option value="" disabled selected>Select Civil Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widowed">Widowed</option>
                </select>
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
