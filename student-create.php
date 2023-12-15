<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-lg-6">
            <div class="card shadow mb-4" style="width: 18rem;">
            <div class="card-header py-3">
                        <h4>Form 
                            <!-- <a href="table.php" class="btn btn-danger float-end">BACK</a> --S>
                        </h4>
                    </div>
                    <div class="card" style="width: 18rem;">

                    <ul class="list-group list-group-flush">
                    <div class="card-body">
                        

                        
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
  <form action="code.php" method="POST">
      <label for="">Full Name</label>
      <input type="text" name="name" required value="">
      <label for="">Date of Birth</label>
      <input type="text" name="birth" placeholder="yy-mm-yy">
      <label for="">Citizenship</label>
      <input type="text" name="citizen" required value="">
      <label for="">Permanent Address</label>
      <input type="text" name="peraddress" required value="">
      <label for="">School Name</label>
      <input type="text" name="school" required value="">
      <label for="">Year Level</label>
      <input type="text" name="yearlevel" required value="">
      <label for="">Course</label>
      <input type="text" name="course" required value="">
      <label for="">Mobile Number</label>
      <input type="text" name="phone" required value="">
      <label for="">Email Address</label>
      <input type="text" name="email" required value="">
      <label for="">Age</label>
      <input type="number" name="age" required value="">
      <label for="">General Average</label>
      <input type="text" name="genaverage" required value="">
      <label for="">Civil Status</label>
      <select class="" name="civil_status" required>
        <option value="" selected hidden>Civil Status</option>
        <option value="Single">Single</option>
        <option value="Married">Married</option>
        
      </select>
      <label for="">Gender</label>
      <input type="radio" name="gender" value="Male" required> Male
      <input type="radio" name="gender" value="Female"> Female

      <label for="">School Type</label>
      <input type="radio" name="school_type" value="Public" required> Public
      <input type="radio" name="school_type" value="Private"> Private

      <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                            </div>
    

    </form>
  </body>
</html>

                            

                   
                    </div>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>