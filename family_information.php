<style>
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    .registerbtn:hover {
        opacity: 1;
    }




    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        margin-top: 7%;
        margin-bottom: 5%;
        width: 1000px;



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



    .container {
        display: flex;
        height: 80vh;
        margin-top: 7%;
        margin-bottom: 5%;

    }

    #name {
        margin-right: 10px;

        width: 45%;
    }

    #name2 {
        margin-top: -7%;
        margin-right: 10px;
        width: 93%;

    }


    #name1 {
        margin-right: 8px;
        width: 30%;
    }

    #con {

        margin-top: -10%;
        margin-left: 6%;


    }

    #con1 {
        margin-left: 4%;
    }

    #con2 {
        margin-left: 6%;
        padding-top: 5%;
    }

    .last {
        margin-bottom: -50px;
    }

    .next {
        margin-top: -2%;
    }

    #con3 {
        margin-left: 6%;
        padding-top: -5%;
    }

    #con4 {
        margin-left: 6%;

    }

    #section-2 {
        padding-top: 7%;
    }

    .button {
        margin-top: -8%;
        margin-bottom: 3%;

    }

    button {
        border-radius: 30%;
        color: aliceblue;
        background: linear-gradient(to bottom left, #0033cc 32%, #33ccff 77%);
    }
</style>
<?php
session_start();
if (isset($_SESSION['username'], $_SESSION['password'])) {
    require 'connect.php';
    require 'functions.php';
    include('includes/headerscho.php');
    include('includes/navscho.php');
?>


    <?php

    $fatherstat = "";
    $fathername = "";
    $fatheraddress = "";
    $fatheroccup = "";
    $fathereducattain = "";
    $motherstat = "";
    $mothername = "";
    $motheraddress = "";
    $motheroccup = "";
    $mothereducattain = "";
    $gross = "";
    $sibling = "";

    $scholar_id = $_SESSION['scholarid'];
    $sql = "SELECT * FROM family_tbl WHERE fk_scholar_id = '$scholar_id'";
    $query = mysqli_query($con, $sql);
    $familyresult = mysqli_fetch_assoc($query);
    $count = mysqli_num_rows($query);
    if ($count > 0) {
        $fatherstat = "$familyresult[father_status]";
        $fathername = "$familyresult[father_name]";
        $fatheraddress = "$familyresult[father_address]";
        $fatheroccup = "$familyresult[father_occupation]";
        $fathereducattain = "$familyresult[father_education_attainment]";
        $motherstat = "$familyresult[mother_status]";
        $mothername = "$familyresult[mother_name]";
        $motheraddress = "$familyresult[mother_address]";
        $motheroccup = "$familyresult[mother_occupation]";
        $mothereducattain = "$familyresult[mother_education_attainment]";
        $gross = "$familyresult[parent_gross_income]";
        $sibling = "$familyresult[number_of_siblings]";
    }

    if (isset($_POST['updateFamilyBackground'])) {
        $fatherstat = $_POST['fatherstat'];
        $fathername = $_POST['fathername'];
        $fatheraddress = $_POST['fatheraddress'];
        $fatheroccup = $_POST['fatheroccup'];
        $fathereducattain = $_POST['fathereducattain'];
        $motherstat = $_POST['motherstat'];
        $mothername = $_POST['mothername'];
        $motheraddress = $_POST['motheraddress'];
        $motheroccup = $_POST['motheroccup'];
        $mothereducattain = $_POST['mothereducattain'];
        $gross = $_POST['gross'];
        $sibling = $_POST['sibling'];

        if($count > 0){
            $sql = "UPDATE `family_tbl` SET `father_status`='$fatherstat', `mother_status`=' $motherstat',`father_name`='$fathername',
            `mother_name`='$mothername',`father_address`='$fatheraddress',`mother_address`='$motheraddress',
            `father_education_attainment`='$fathereducattain',`mother_education_attainment`='$mothereducattain',
            `father_occupation`='$fatheroccup',`mother_occupation`='$motheroccup',`parent_gross_income`='$gross',`number_of_siblings`='$sibling' WHERE fk_scholar_id = '$scholar_id'";
           $query = mysqli_query($con,$sql);
           if($query){
            echo '<script>
            Swal.fire({
                title: "SUCCESS",
                text: "YOU UPDATED FAMILY BACKGROUND SUCCESFULY",
                icon: "success"
              });</script>
            ';
           }
        }else{
            $sql = "INSERT INTO `family_tbl`(`fk_scholar_id`, `father_status`, `mother_status`, `father_name`, 
            `mother_name`, `father_address`, `mother_address`, `father_education_attainment`, `mother_education_attainment`, 
            `father_occupation`, `mother_occupation`, `parent_gross_income`, `number_of_siblings`) VALUES ('$scholar_id','$fatherstat','$motherstat',
            '$fathername','$mothername','$fatheraddress','$motheraddress','$fathereducattain','$mothereducattain','$fatheroccup','$motheroccup','$gross','$sibling')";
            $query = mysqli_query($con,$sql);
            if($query){
                echo '<script>
                Swal.fire({
                    title: "SUCCESS",
                    text: "YOU INSERTED FAMILY BACKGROUND SUCCESFULY",
                    icon: "success"
                  });</script>
                ';
        }
    }
}



    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Edit Student Profile</title>
    </head>

    <body>

        <div class="container">
            <form class="application-form" id="scholarshipForm" method="post">


                <!-- <form class="application-form" id="scholarshipForm"> -->


                <!-- <div class="col">
            <label class="form-label">Username:</label>
            <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>">
          </div> -->

                <div class="container d-flex justify-content-center">
                    <form action="" method="post" style="width:50vw; min-width:300px;">



                        <div class="form-section" id="section-2" style="display: none;">
                            <h2>FAMILY BACKGROUND</h2>
                            <section>
                                <div class="profile-box box-left">

                                    <div class="row mb-3" id="con2">


                                        <div class="mb-3 last" id="name2">
                                            <label>Fathers Living</label>

                                            <p>
                                                <input type="text" class="form-control" name="fatherstat" value="<?php echo $fatherstat; ?>">
                                            </p>
                                        </div>
                                        <div class="mb-3 last" id="name2">
                                            <label>Fathers Name</label>

                                            <p>
                                                <input type="text" class="form-control" name="fathername" value="<?php echo $fathername; ?>">
                                            </p>
                                        </div>
                                        <div class="mb-3 last" id="name2">
                                            <label>Fathers Address</label>

                                            <p>
                                                <input type="text" class="form-control" name="fatheraddress" value="<?php echo $fatheraddress; ?>">
                                            </p>

                                        </div>
                                        <div class="mb-3 last" id="name2">
                                            <label>Fathers Occupatio </label>

                                            <p>
                                                <input type="text" class="form-control" name="fatheroccup" value="<?php echo $fatheroccup; ?>">
                                            </p>
                                        </div>
                                        <div class="mb-3 last" id="name2">
                                            <label>Fathers Educational Attainment</label>

                                            <p>
                                                <input type="text" class="form-control" name="fathereducattain" value="<?php echo $fathereducattain; ?>">
                                            </p>
                                        </div>
                                        <div class="mb-3 last" id="name2">
                                            <label>Total Parent Gross Income</label>

                                            <p>
                                                <input type="text" class="form-control" name="gross" value="<?php echo $gross; ?>">
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </section>



                            <button class="prev-btn next" type="button" onclick="prevSection()">Previous</button>


                            <button class="next-btn next" type="button" onclick="nextSection()">Next</button>
                        </div>

                        <div class="form-section" id="section-2" style="display: none;">
                            <h2>FAMILY BACKGROUND</h2>
                            <section>
                                <div class="profile-box box-left">


                                    <div class="row mb-3" id="con2">


                                        <div class="mb-3 last" id="name2">
                                            <label>Mothers Living</label>

                                            <p>
                                                <input type="text" class="form-control" name="motherstat" value="<?php echo $motherstat; ?>">
                                            </p>
                                        </div>
                                        <div class="mb-3 last" id="name2">
                                            <label>Mothers Name</label>

                                            <p>
                                                <input type="text" class="form-control" name="mothername" value="<?php echo $mothername; ?>">
                                            </p>
                                        </div>
                                        <div class="mb-3 last" id="name2">
                                            <label>Mothers Address</label>

                                            <p>
                                                <input type="text" class="form-control" name="motheraddress" value="<?php echo $motheraddress; ?>">
                                            </p>
                                        </div>
                                        <div class="mb-3 last" id="name2">
                                            <label>Mothers Occupation</label>

                                            <p>
                                                <input type="text" class="form-control" name="motheroccup" value="<?php echo $motheroccup; ?>">
                                            </p>
                                        </div>
                                        <div class="mb-3 last" id="name2">
                                            <label>Mothers Educational Attainment</label>

                                            <p>
                                                <input type="text" class="form-control" name="mothereducattain" value="<?php echo $mothereducattain; ?>">
                                            </p>
                                        </div>
                                        <div class="mb-3 last" id="name2">
                                            <label>NO. of Siblings in The Family</label>

                                            <p>
                                                <input type="text" class="form-control" name="sibling" value="<?php echo $sibling; ?>">
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </section>
                            <div class="button" style="float: right; padding-top: 25px;">
                                <button type="submit" class="btn btn-success" name="updateFamilyBackground">Update</button>
                            </div>

                            <button class="prev-btn next" type="button" onclick="prevSection()">Previous</button>


                            <!-- <button class="submit-btn" type="submit">Submit Application</button> -->
                        </div>


                        <!-- <div class="button">
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <button type="submit" class="btn btn-primary" name="scholar">Accept</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                        </div> -->



                    </form>
                </div>
        </div>

        <!-- Bootstrap -->
        <script src="script.js"></script>
    </body>

    </html>
<?php } ?>