<?php
session_start();
if (isset($_SESSION['username'], $_SESSION['password'])) {
    include "connect.php";
?>
    <?php
    include('includes/header.php');
    include('includes/navbar.php');

    ?>


    <style>
        #rad:hover {
            border-radius: 15px;
            font-style: normal;
            font: 400;
            color: black;
            background-color: aqua;
        }

        #rad {
            border-radius: 15px;
            background-color: darkgray;
            opacity: calc(0.9);
        }

        #dash {
            color: black;
            
            background-size: contain;
            background-repeat: repeat-y;
            background-position: 350px;





        }

        button {
            border-radius: 30%;
            color: aliceblue;
            background: linear-gradient(to bottom left, #0033cc 32%, #33ccff 77%);
        }
    </style>

    <!--START Adding Coursae Backend -->
    <?php
    if (isset($_POST['addCourse'])) {
        $course = $_POST['course'];

        $sql = mysqli_query($con, "INSERT INTO course_tbl(Course)VALUES('$course')");

        if ($sql) {
            echo '<script>
            Swal.fire({
                title: "SUCCESS",
                text: "YOU ADDED COURSE SUCCESFULY",
                icon: "success"
              });</script>
            ';
        }
    }
    ?>
    <!--END Adding Coursae Backend -->


    <!-- Begin Page Content -->
    <div class="container-fluid" id="dash">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">COURSE</h1>
            <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
       class="fas fa-download fa-sm text-white-50"></i> Generate Payroll</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body">

                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#course">ADD COURSE</button>
                    <br><br>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                        $no = 1
                        ?>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM course_tbl ORDER BY Course_ID ASC";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $course) {
                            ?>
                                    <tr>
                                        <td><?= $course['Course_ID']; ?></td>
                                        <td><?= $course['Course']; ?></td>

                                        <td>
                                            <form method="POST">
                                                <a href="view_course.php?id=<?= $course['Course_ID']; ?>" class="btn btn-info btn-sm comfirm-delete">View</a>
                                                
                                            </form>

                                        </td>
                                    </tr>
                            <?php

                                    $no++;
                                }
                            } else {
                                echo "<h5> No Record Found </h5>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        </div>



        <!-- Content Row -->

        <!-- START ADD COURSE Modal -->
<div class="modal fade" id="course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="course" class="col-form-label">COURSE:</label>
                        <input type="text" name="course" class="form-control" id="course">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="addCourse">ADD</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END ADD COURSE Modal -->







        <br><br><br><br><br><br><br><br><br><br><br><br><br>



    <?php } else {
    header("Location: login.php");
    exit;
} ?>