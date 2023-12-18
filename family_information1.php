<?php
session_start();
if (isset($_SESSION['username'], $_SESSION['password'])) {
    require 'connect.php';
    require 'functions.php';
    include('includes/headerscho.php');
    include('includes/navscho.php');
?>
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
    $result = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($query);
    if ($count > 0) {
        $fatherstat = "$result[father_status]";
        $fathername = "$result[father_name]";
        $fatheraddress = "$result[father_address]";
        $fatheroccup = "$result[father_occupation]";
        $fathereducattain = "$result[father_education_attainment]";
        $motherstat = "$result[mother_status]";
        $mothername = "$result[mother_name]";
        $motheraddress = "$result[mother_address]";
        $motheroccup = "$result[mother_occupation]";
        $mothereducattain = "$result[mother_education_attainment]";
        $gross = "$result[parent_gross_income]";
        $sibling = "$result[number_of_siblings]";
    }



    ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Edit Family Background</title>
</head>

<body>

        <div class="container">
            

            <div class="container d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div>
                        <h2>Family Information</h2>
                        <section>
                            <div class="profile-box box-left">

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
                        </section>
                       
                       
                       
                        <section>
                            <div class="profile-box box-left">

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

                        </section>
                        <div class="button" style="float: right; padding-top: 25px;">
                            <button type="submit" class="btn btn-success" name="submit">Update</button>
                            <a href="index.php" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
</body>
</html>

<?php }?>