<?php
include('includes/header.php'); 
include('includes/navbar.php');
include "connect.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
  
  #accordionSidebar {
    background: lightgray;
    color: black;
  }

  #divider { 
    border: 2px solid white;
    height: 55px;
    

  }
  h4{
    font-size: 20px;
    margin-left: 40px;
    color: black;
    font-weight: normal;
  }
  #admin{
    color: black;
    font-weight: normal;
    
  }
  #divider1{
    border: 2px solid white;
    height: 55px;
    border-top: none;
  }
  
  

  
  
  </style>
<?php 
if(isset($_POST['reject'])){

	$id = $_POST['id'];
	$select = "UPDATE students SET status = 'rejected' WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);
	
}

 ?>

<?php 
if(isset($_POST['scholar'])){


	$select = "UPDATE students SET status = 'scholars' WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);
  if ($resut) {
    header("Location: table.php?msg=Successfully Add to Scholar");
  } else {
    echo "Failed: " . mysqli_error($con);
  }
  
    

}


 ?>

<?php 
if(isset($_POST['pend'])){

	$id = $_POST['id'];

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
document.location.href = 'schotab.php';
</script>
";
$select = "UPDATE students SET status = 'pending' WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);

}


 ?>

 

<div class="container mt-4">

<?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color:cornflowerblue;">
                <h3>Scholars
                
                    <!--<a href="student-create.php" class="btn btn-primary float-end">Add Students</a>-->
                </h3>
            </div>
            <div class="card-body">
                

            
            <table class="table table-bordered table-striped">
            <thead>
                                <tr>
                                    <th>Scholar ID</th>
                                    <th>Student Name</th>
                                    <th>BirthDate</th>
                                    <th>School Name</th>
                                    <th>Course</th>
                                    <th>Baranggay</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1
                            ?>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM students WHERE status = 'scholars' ORDER BY id ASC";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                            <td><?= $student['scholar_id']; ?></td>
                                                <td><?= $student['lname'], ', ' ,$student['fname'],', ',$student['mname'], '.'?></td>
                                                <td><?= $student['birth']; ?></td>
                                                <td><?= $student['school']; ?></td>
                                                <td><?= $student['course']; ?></td>
                                                <td><?= $student['brgy']; ?></td>
                                                <td>
                                        
                                                       <form action="schotab.php" method="POST">
                                                       
                                                       <a href="view.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">View</a>
		                                                  <input type="hidden" name="id" value="<?php echo $student['id']; ?>"/>
	                                                    <a href='table.php?id=$student[id]'><input class="btn btn-warning btn-sm comfirm-delete" value="Pend" type="submit" onclick="return checkpend()" name="pend" >
                                                      <!-- <a href='table.php?id=$student[id]'><input class="btn btn-danger btn-sm comfirm-delete" value="Reject" type="submit" onclick="return checkreject()" name="reject"> -->
                                                      <input type="email" name="email1" value="<?= $student['email']; ?>"  style="display: none;">
<input type="text" name="subject" value="Renewal for Scholarship: Important Notice" style="display: none;"> 
<input type="text" name="message" value="Good day! <?= $student['fname']; ?><br><br> This email is a reminder regarding the renewal of your scholarship for the upcoming semester/year. Your scholarship is due for renewal, and it is crucial to complete this process promptly to ensure uninterrupted financial support.<br><br>
Renewing your scholarship is an essential step to continue benefiting from this valuable opportunity and support towards your academic pursuits. Please review the renewal requirements and ensure all necessary documents or forms are submitted before the specified deadline.
<br><br>Should you have any questions or require assistance regarding the renewal process, please don't hesitate to reach out to the online application (link ng system na pagre renew han). We are here to guide you through the process and any concerns you might have.<br><br>Your dedication to your academic endeavors has been commendable, and we look forward to continuing our support in the upcoming semester/year.<br><br>
Thank you for your attention to this matter. Your prompt action in renewing your scholarship is greatly appreciated." style="display: none; text-transform:capitalize;"> <br>
	                                                       	</form>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                        } } ?>

</table>


            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function checkpend(){
        return  confirm("Are you sure you want to PEND this data?"); 
    }
</script>

<script>
    function checkreject(){
        return  confirm("Are you sure you want to REJECT this data?"); 
    }
</script>











 