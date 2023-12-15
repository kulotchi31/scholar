<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit 
                            <a href="table.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label>Full Name</label>
                                        <input type="text" name="name" value="<?=$student['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Birth Date</label>
                                        <input type="text" name="birth" value="<?=$student['birth'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Citizenship</label>
                                        <input type="text" name="citizen" value="<?=$student['citizen'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Permanent Address</label>
                                        <input type="text" name="peraddress" value="<?=$student['peraddress'];?>" class="form-control">
                                    </div>

                                     
                                    <div class="mb-3">
                                        <label>School</label>
                                        <input type="text" name="school" value="<?=$student['school'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Year Level</label>
                                        <input type="text" name="yearlevel" value="<?=$student['yearlevel'];?>" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label>Course</label>
                                        <input type="text" name="course" value="<?=$student['course'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="<?=$student['phone'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="text" name="email" value="<?=$student['email'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>age</label>
                                        <input type="number" name="age" value="<?=$student['age'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>General Average</label>
                                        <input type="text" name="genaverage" value="<?=$student['genaverage'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Civil Status</label>
                                        <input type="text" name="civil_status" value="<?=$student['civil_status'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Gender</label>
                                        <input type="text" name="gender" value="<?=$student['gender'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>School Type</label>
                                        <input type="text" name="school_type" value="<?=$student['school_type'];?>" class="form-control">
                                    </div>
                                    

                                    

                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Student
                                        </button>
                                    </div>

                                    


                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>