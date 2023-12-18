<?php
session_start();
if (isset($_SESSION['username'], $_SESSION['password'])) {
    require 'connect.php';
    require 'functions.php';
    include('includes/headerscho.php');
    
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


   $tax_img = $_FILES['tax_img']['name'];
   $image_size = $_FILES['tax_img']['size'];
   $image_tmp_name5 = $_FILES['tax_img']['tmp_name'];
   $image_folder5 = 'upload/'.$tax_img;

   $cor_img = $_FILES['cor_img']['name'];
   $image_size = $_FILES['cor_img']['size'];
   $image_tmp_name4 = $_FILES['cor_img']['tmp_name'];
   $image_folder4 = 'upload/'.$cor_img;

   $cog_img = $_FILES['cog_img']['name'];
   $image_size = $_FILES['cog_img']['size'];
   $image_tmp_name3 = $_FILES['cog_img']['tmp_name'];
   $image_folder3 = 'upload/'.$cog_img;
    
        $scholarid = $_SESSION['scholarid'];
        $id = $_GET["id"];

        $sql = mysqli_query($con, "INSERT INTO requirements_tbl(COR,COG,tax_exemption, fk_scholar_id)VALUES('$cor_img','$cor_img','$tax_img', '$scholarid')");

        if ($sql) {
            echo '<script>
            Swal.fire({
                title: "SUCCESS",
                text: "YOU ADDED REQUIREMENTS SUCCESFULY",
                icon: "success"
              });</script>
            ';
        }else{
            echo '<script>
            Swal.fire({
                title: "ERROR",
                text: "YOU FAILED TO ADD REQUIREMENTS",
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

                      
                        <br><br>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                   
                                    <th>COR</th>
                                    <th>COG</th>
                                    <th>TAX</th>
                                 
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 0;
                                $scholar = $_SESSION['scholarid'];
                                $query = "SELECT * FROM requirements_tbl WHERE fk_scholar_id = '".$_GET["id"]."' ORDER BY requirements_id ASC";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $requirements) {
                                        $no += 1;
                                ?>
                                        <tr>
                                        
                                            <td><?php echo '<img class="img1" src="upload/'.$requirements['COR'].'" width="250" height="250" style=" margin-bottom: 25px;" >'; ?></td>

                                             <td><?php echo '<img class="img1" src="upload/'.$requirements['COG'].'" width="250" height="250" style=" margin-bottom: 25px;" >';?></td>
                                             <td><?php echo '<img class="img1" src="upload/'.$requirements['tax_exemption'].'" width="250" height="250" style=" margin-bottom: 25px;" >'; ?></td>


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
                           
                             <strong><label>TAX EXEMPTION</label></strong>


                         <div>
                            <input id="year1" type="file" name="tax_img" class="box" accept="image/jpg, image/jpeg, image/png">  
                        </div>

                        <br>


                        <strong><label>CERTIFICATE OF REGISTRATION</label></strong>
                        <div>
                            <input id="year1" type="file" name="cor_img" class="box" accept="image/jpg, image/jpeg, image/png" >  
                        </div>


                        <br>    

                        <strong><label>CERTIFICATE  OF GRADES</label></strong>
                        <div>
                            <input id="year1" type="file" name="cog_img" class="box" accept="image/jpg, image/jpeg, image/png">  
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