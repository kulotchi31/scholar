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


   $reportcard = $_FILES['reportcard']['name'];
   $image_size = $_FILES['reportcard']['size'];
   $image_tmp_name = $_FILES['reportcard']['tmp_name'];
   $image_folder = 'upload/'.$reportcard;


    
        $scholarid = $_SESSION['scholarid'];

        $sql = mysqli_query($con, "INSERT INTO report_card_tbl(report_card, fk_scholar_id)VALUES('$reportcard','$scholarid')");

        if ($sql) {
            echo '<script>
            Swal.fire({
                title: "SUCCESS",
                text: "YOU ADDED REPORT CARD SUCCESFULY",
                icon: "success"
              });</script>
            ';
        }else{
            echo '<script>
            Swal.fire({
                title: "ERROR",
                text: "YOU FAILED TO ADD REPORT CARD",
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
            <h1 class="h3 mb-0 text-gray-800">REQUIREMENTS</h1>
            <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
       class="fas fa-download fa-sm text-white-50"></i> Generate Payroll</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#disability">Add Report Card</button>
                        <br><br>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                   
                                 
                                    <th>Report CARD</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 0;
                                $scholar = $_SESSION['scholarid'];
                                $query = "SELECT * FROM report_card_tbl WHERE fk_scholar_id = '$scholar' ORDER BY repor_card_id ASC";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $card) {
                                        $no += 1;
                                ?>
                                        <tr>
                                        
                                            <td><?php echo '<img class="img1" src="upload/'.$card['report_card'].'" width="250" height="250" style=" margin-bottom: 25px;" >'; ?></td>



                                            <td>
                                                <form action="course.php" method="POST">
                                                    <a href="editreportcard.php?id=<?= $card['repor_card_id']; ?>" class="btn btn-info btn-sm comfirm-delete">View</a>

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
                        <h5 class="modal-title" id="exampleModalLabel">Requirements</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" enctype="multipart/form-data">
                           
                             <strong><label>Report Card</label></strong>


                         <div>
                            <input id="year1" type="file" name="reportcard" class="box" accept="image/jpg, image/jpeg, image/png">  
                        </div>

                        <br>





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