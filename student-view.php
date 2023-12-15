<style>
.button{
  margin-top: 20px;
  margin-left: 40%;
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
// $id = session_id();
// echo session_id();

if (isset($_POST["submit"])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $scholar_id = $_POST['scholar_id'];
  $sql = "UPDATE `students` SET `username`='$username',`password`='$password',`scholar_id`='$scholar_id' WHERE id = $id";
  $result = mysqli_query($con, $sql);

  if ($result) {

    $select = "UPDATE students SET status = 'scholars' WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);
  if ($resut) {
    

    // header("Location: table.php?msg=Successfully Add to Scholar");
  } else {
    echo "Failed: " . mysqli_error($con);
  }
    
  } else {echo "Data updated successfully";
    echo "Failed: " . mysqli_error($con);
  }
}
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
document.location.href = 'table.php';
</script>
";
$select = "UPDATE students SET status = 'scholars' WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);

}
?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #C0C0C0;">
    Scholar Information Management System
  </nav> 

  <div class="container">
    <div class="text-center mb-4">
      <h3>Scholars Credentials</h3>
      
    </div>
    

    <?php
    $sql = "SELECT * FROM `students` WHERE id = $id LIMIT 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">

    <div class="email">
           <?php echo $row['email'] ?>
</div>
          <div class="col">
            <label class="form-label">Username:</label>
            <input type="text" class="form-control" name="username"  value="<?php echo $row['email'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Password:</label>
            <input type="text" class="form-control" name="password" id="inputField2" value="<?php echo $row['password'] ?>" readonly>
          </div>
        </div>

        

        <div class="col">
            <label class="form-label">Scholar ID:</label>
            <input type="text" class="form-control" name="scholar_id"id="inputField1" value="<?php echo $row['scholar_id'] ?>">
          </div>
        </div>


<input type="email" name="email1" value="<?php echo $row['email'] ?>"  style="display: none;"> <br>
<input type="text" name="subject" value="Scholarship Confirmation" style="display: none;"> <br>
<input type="text" name="message" value="Good day! <?php echo $row['fname']?><br><br>
We are pleased to inform you that your application for the Scholarship at the Municipality of Santo Domingo, Nueva Ecija, has been accepted.
<br><br>To proceed with the online scholarship process, please visit Scholarship Portal Link and use the following login credentials:
<br><br>
Username: <?php echo $row['email'] ?><br>
Password: <?php echo $row['password'] ?>
<br><br>
On behalf of the Municipality of Santo Domingo, we extend our heartfelt congratulations to you. We look forward to your continued success as a scholarship recipient.
<br><br>
Please be advised to await further announcements regarding the disbursement of the scholarship funds. Your patience is appreciated as we finalize the details and ensure a smooth and timely process.
<br><br>
We will provide you with all necessary information, including the schedule, payment method, and any required documents, in our upcoming announcements. 
<br><br>
Thank you." style="display: none; text-transform:capitalize;"> <br>
<!-- <button type="submit" name="send">Send</button> -->

 <div class="button">
          <button type="submit" class="btn btn-primary" onclick="return checkapprove()" name="submit" >Save</button>
          <button type="submit" class="btn btn-success" onclick="return checkapprove1()" name="send" >Approve</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
    
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#inputField1').on('input', function() {
        // Get the value entered in inputField1
        var value1 = $(this).val();

        // Modify the value to autofill inputField2 (e.g., adding a prefix)
        var value2 = value1;

        // Update the value of inputField2
        $('#inputField2').val(value2);
    });
});
</script>
<script>
    function checkapprove(){
        return  confirm("Are you sure you want to SAVE this data?"); 
    }
</script>
<script>
    function checkapprove1(){
        return  confirm("Are you sure you want to APPROVE this data?"); 
    }
</script>



