<style>
.button{
  margin-top: 20px;
  margin-left: 40%;
  padding-bottom: -50px;
}
.email{
  margin-top: 20px;
  margin-left: 40%;
}
.col{
  padding-top: 20px;
  
}

</style>
<?php
include "connect.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
$id = $_GET["id"];
?>
<?php

if(isset($_POST["send"])){
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'santodomingolgu@gmail.com'; 
$mail->Password = 'hdsq buvc gqxh hgtu';
$mail->SMTPSecure = 'ssl';

$mail->Port = 465;

$mail->setFrom('santodomingolgu@gmail.com'); 
$mail->addAddress($_POST["email1"]);
$mail->isHTML(true);
$mail->Subject = $_POST["subject"];
$mail->Body = $_POST["message"];

$mail->send();
echo
"
<script>
alert('message done');
document.location.href = 'pendingtab.php';
</script>
";
$select = "UPDATE students SET status = 'scholars' WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);

}
?>
<!doctype html>
<html lang="en">
  <head id="head">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student View</title>
</head>
<style>
#studview{
    background-image: url(pic1.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 500px;
    background-attachment: fixed; 
   align-items: center;
   
   
    
    
   
}

#row{
    opacity: calc(0.8); 
    
    
}

#head{
    background-image: url(pic2.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 200px;
    
    
   

   
}

/* #head:hover{
    opacity: 1.0;

} */



.img1{
    width: 20%;
    height: 20%;  
    
}
.img1:hover{
    /* position: relative; */
    transform: scale(4.5); 
    /* opacity: calc();  */
    width: 150px;
    height: 150px;
    margin-left: 40%;
    /* stroke-opacity: calc(1); */
    stop-opacity: calc(0.8);    


    
}







</style>

<body style="background-color:  skyblue;" id="studview"  >

    <div class="container mt-5" id="con"  >

        <div class="row" id="row" style=" padding: 310px;"  >
            <div class="col-md-12"  >
                <div class="card"  style=" margin-top: -300px; width: 700px;  margin-left: -30px"  >
                    <div class="card-header" id="head" >
                        
                    </div>
                    <div class="card-body" >

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
                                
                                <h4><center> PERSONAL INFORMATION</center></h4>
                                
                                    <strong>
                                    <div class="mb-3">
                                        <h5><label>Full Name</label>
                                        <p class="form-control">
                                        <strong> <?=$student['lname'], ', ' ,$student['fname'],', ',$student['mname'], '.'?>
                                    
                                    </div>
  
                                    


                                    <div class="mb-3">
                                        <h5><label>Birth Date</label>
                                        <p class="form-control">
                                        <strong> <?=$student['birth'];?>
                                        </p>
                                     </div>
                                    
                                     <div class="mb-3">
                                        <h5><label>Age</label>
                                        <p class="form-control">
                                        <strong><?=$student['age'];?>
                                        </p>
                                     </div>

                                     <div class="mb-3">
                                        <h5><label>Citizenship</label>
                                        <p class="form-control">
                                        <strong><?=$student['citizen'];?>
                                        </p>
                                     </div>

                                     <div class="mb-3">
                                        <h5><label>Place of Birth</label>
                                        <p class="form-control">
                                        <strong> <?=$student['placeofbirth'];?>
                                        </p>
                                     </div>

                                     <div class="mb-3">
                                        <h5><label>Gender</label>
                                        <p class="form-control">
                                        <strong> <?=$student['gender'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <h5><label>Civil Status</label>
                                        <p class="form-control">
                                        <strong> <?=$student['civil_status'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <h5><label>Baranggay</label>
                                        <p class="form-control">
                                        <strong> <?=$student['brgy'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <h5><label>Permanent Address</Address></label>
                                        <p class="form-control">
                                        <strong><?=$student['brgy'], ', ' ,$student['municipality'],', ',$student['province'], '.'?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <h5><label>School Name</label>
                                        <p class="form-control">
                                        <strong><?=$student['school'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <h5><label>School Address</label>
                                        <p class="form-control">
                                        <strong><?=$student['schooladdr'];?>
                                        </p>
                                    </div>

                                
                                    <div class="mb-3">
                                        <h5><label>Email</label>
                                        <p class="form-control">
                                        <strong> <?=$student['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <h5><label>School Intended To Enroll In</label>
                                        <p class="form-control">
                                        <strong><?=$student['intend'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <h5><label>Course</label>
                                        <p class="form-control">
                                        <strong><?=$student['course'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <h5><label>Year Level</label>
                                        <p class="form-control">
                                        <strong><?=$student['yearlevel'];?>
                                        </p>
                                    </div>
                                     
                                    <div class="mb-3">
                                        <h5><label>Phone Number</label>
                                        <p class="form-control">
                                        <strong><?=$student['phone'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <h5><label>General Average</label>
                                        <p class="form-control">
                                        <strong><?=$student['genaverage'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <h5><label>School Type</label>
                                        <p class="form-control">
                                        <strong><?=$student['school_type'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <h5><label>Type of Disability</label>
                                        <p class="form-control">
                                        <strong><?=$student['disability'];?>
                                        </p>
                                    </div>
 
                                    <h4><center> FAMILY BACKGROUND</center></h4>

                                    <div class="mb-3">
                                        <h5><label>Father Status</label>
                                        <p class="form-control">
                                        <strong><?=$student['fatherstat'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <h5><label>Mother Status</label>
                                        <p class="form-control">
                                        <strong><?=$student['motherstat'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <h5><label>Father Name</label>
                                        <p class="form-control">
                                        <strong> <?=$student['fathername'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <h5><label>Mother Name</label>
                                        <p class="form-control">
                                        <strong><?=$student['mothername'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <h5><label>Father Address</label>
                                        <p class="form-control">
                                        <strong> <?=$student['fatheraddress'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <h5><label>Mother Address</Address></label>
                                        <p class="form-control">
                                        <strong> <?=$student['motheraddress'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <h5><label>Father Occupation</label>
                                        <p class="form-control">
                                        <strong><?=$student['fatheroccup'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <h5><label>Mother Occupation</label>
                                        <p class="form-control">
                                        <strong> <?=$student['motheroccup'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <h5><label>Father Educational Attainment</label>
                                        <p class="form-control">
                                        <strong> <?=$student['fathereducattain'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <h5><label>Mother Educational Attainment</label>
                                        <p class="form-control">
                                        <strong> <?=$student['mothereducattain'];?>
                                        </p>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <h5><label>Gross</label>
                                        <p class="form-control">
                                        <strong><?=$student['gross'];?>
                                        </p>
                                    </div>
                                    
                                    
                                    <div class="mb-3">
                                        <h5><label>Number of Siblings</label>
                                        <p class="form-control">
                                        <strong><?=$student['sibling'];?>
                                        </p>
                                    </div>

                                    <h4><center>Image Requirements</center></h4>


                                    
                                    <div>
                                        <h5><label>Tax Exemption</label>
                                        <p class="form-control">
                                        <img class="img1" src="upload/<?php echo $student['tax_img'];?>"
                                        </p>
                                    </div>

                                    <div>
                                        <h5><label>COR</label>
                                        <p class="form-control">
                                        <img class="img1" src="upload/<?php echo $student['cor_img'];?>"
                                        </p>
                                    </div>
                                    <div>
                                        <h5><label>COG</label>
                                        <p class="form-control">
                                        <img class="img1" src="upload/<?php echo $student['cog_img'];?>"
                                        </p>
                                    </div>
                                    <div>
                                        <h5><label>Report Card</label>
                                        <p class="form-control">
                                        <img class="img1" src="upload/<?php echo $student['report_img'];?>"
                                        </p>
                                    </div>
                                    <div>
                                        <h5><label>Baranggay Clearance</label>
                                        <p class="form-control">
                                        <img class="img1" src="upload/<?php echo $student['brgclear_img'];?>"
                                        </p>
                                    </div>
                                    <div>
                                        <h5><label>Good Moral</label>
                                        <p class="form-control">
                                        <img class="img1" src="upload/<?php echo $student['moral_img'];?>"
                                        </p>
                                    </div>

                                    <?php
    $sql = "SELECT * FROM `students` WHERE id = $id LIMIT 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center" >
      <form action="" method="post" style="width:50vw; min-width:300px;" >
        <div class="row mb-3" >



        <input type="email" name="email1" value="<?php echo $row['email'] ?>"  style="display: none;">
<input type="text" name="subject" value="Confirmation: Successful Renewal of Your Scholarship" style="display: none;"> 
<input type="text" name="message" value="Good day! <?php echo $row['fname']?><br><br> I am writing to inform you that your scholarship renewal process has been successfully completed. Congratulations! You are once again officially recognized as a scholar for the [semester/year].
<br><br>
Your commitment to fulfilling the renewal requirements showcases your dedication to academic excellence, and we are thrilled to continue supporting your educational journey.
<br><br>
As a renewed scholar, you will retain access to the benefits and opportunities that come with this scholarship. Please feel free to reach out to the online application(link ng system) if you have any questions or require further assistance." style="display: none; text-transform:capitalize;"> 
 
<!-- <button type="submit" name="send">Send</button> -->

 <!-- <div class="button">
          <button type="submit" class="btn btn-success" onclick="return checkapprove1()" name="send" >Approve</button>    
        </div> -->
        <a href="schotab.php" class="btn btn-danger float-end">BACK</a>
    
      </form>
    </div>
  </div>

                                    




                                    


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