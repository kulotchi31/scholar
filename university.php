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
    if (isset($_POST['addUniversity'])) {
        $universityname = $_POST['uname'];
        $universityaddress = $_POST['uaddress'];
        $tpye = $_POST['utype'];

        $sql = mysqli_query($con, "INSERT INTO university_tbl(university_name, university_address,type)VALUES('$universityname','$universityaddress','$tpye')");

        if ($sql) {
            echo '<script>
            Swal.fire({
                title: "SUCCESS",
                text: "YOU ADDED UNIVERSITY SUCCESFULY",
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
            <h1 class="h3 mb-0 text-gray-800">UNIVERSITY</h1>
            <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
       class="fas fa-download fa-sm text-white-50"></i> Generate Payroll</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body">

                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#university">ADD University</button>
                    <br><br>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>University Name</th>
                                <th>University Address</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                        $no = 1
                        ?>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM university_tbl ORDER BY university_id ASC";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $university) {
                            ?>
                                    <tr>
                                        <td><?= $university['university_id']; ?></td>
                                        <td><?= $university['university_name']; ?></td>
                                        <td><?= $university['university_address']; ?></td>
                                        <td><?= $university['type']; ?></td>


                                        <td>
                                            <form action="course.php" method="POST">
                                                <a href="view_university.php?id=<?= $university['university_id']; ?>" class="btn btn-info btn-sm comfirm-delete">View</a>
                                                
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
<div class="modal fade" id="university" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label for="uname" class="col-form-label">University Name:</label>
                        <input type="text" name="uname" class="form-control" id="uname">
                    </div>
                    <div class="form-group">
                        <label for="uaddress" class="col-form-label">University Address:</label>
                        <input type="text" name="uaddress" class="form-control" id="uaddress">
                    </div>
                    <div class="form-group">
                        <label for="utype" class="col-form-label">University Type:</label>
                        <select name="utype" id="utype" class="form-control">
                            <option value="" hidden>Select Type</option>
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                        </select>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="addUniversity">ADD</button>
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