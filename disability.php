<?php
session_start();
if (isset($_SESSION['username'], $_SESSION['password'])) {
    require 'connect.php';
    require 'functions.php';
    include('includes/headerscho.php');
    include('includes/navscho.php');
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
    if (isset($_POST['addDisability'])) {
        $disability = $_POST['disability'];
        $scholarid = $_SESSION['scholarid'];

        $sql = mysqli_query($con, "INSERT INTO disability_tbl(type_of_disability, fk_scholar_id)VALUES('$disability', '$scholarid')");

        if ($sql) {
            echo '<script>
            Swal.fire({
                title: "SUCCESS",
                text: "YOU ADDED DISABILITY SUCCESFULY",
                icon: "success"
              });</script>
            ';
        }else{
            echo '<script>
            Swal.fire({
                title: "ERROR",
                text: "YOU FAILED TO ADD DISABILITY SUCCESFULY",
                icon: "error"
              });</script>';
        }
    }
    ?>
    <!--END Adding Coursae Backend -->


    <!-- Begin Page Content -->
    <div class="container-fluid" id="dash">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DISABILITY</h1>
            <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
       class="fas fa-download fa-sm text-white-50"></i> Generate Payroll</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#disability">Add Disability</button>
                        <br><br>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Type of Disability</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 0;
                                $scholar = $_SESSION['scholarid'];
                                $query = "SELECT * FROM disability_tbl WHERE fk_scholar_id = '$scholar' ORDER BY disability_id ASC";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $disability) {
                                        $no += 1;
                                ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $disability['type_of_disability']; ?></td>



                                            <td>
                                                <form action="course.php" method="POST">
                                                    <a href="view_disability.php?id=<?= $disability['disability_id']; ?>" class="btn btn-info btn-sm comfirm-delete">View</a>

                                                </form>

                                            </td>
                                        </tr>
                                <?php


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
        <div class="modal fade" id="disability" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <label for="disability" class="col-form-label">Type of Disability:</label>
                                <input type="text" name="disability" class="form-control" id="disability" list="disabilityList">
                                <datalist id="disabilityList">
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
                                </datalist>
                            </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="addDisability">ADD</button>
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