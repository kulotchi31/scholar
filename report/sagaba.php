<?php 
   session_start();
   if(isset($_SESSION['username'], $_SESSION['password'])) {
   
   ?>

<?php 

	$host = "localhost";
	$username = "root";
	$password = "";
	$db_name = "scholarinfosystem";

	$con= mysqli_connect($host, $username, $password, $db_name);

	if(!$con) {
		die("Cannot connect to the database");
	}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head> 
<style>
@media print {
.btn{ 
display: none; 
} } 
.head{
    background-color: cornflowerblue;
    
} 
.container{
    margin-top: 30px;
    
    
}
.font{
    font-family: serif;
    

    
}  
</style>
<body>

<div class="head">
<label for="file-input" >
        <img src="pic3.png"/ width="120" height="120" style="margin-left: 10px; margin-top: 7px;">
    </label>
    <label class="font"><h3><b>Scholars' Information Management System of LGU Sto.Domingo<b></h3></label>
</div>

   

 <div class="container">
    <div class="col-md-12">
        <div class="card" style="width: 115%; margin-left: -75px;">
            <div class="card-header" style="background-color:lightblue;">
                <center><h2>Sagaba</h2></center>
            </div>
            <div class="card-body">
                

            <table class="table table-bordered table-striped">
                            <thead>
                                <tr style="font-weight: bolder; color: black">
                                <th>Scholar ID</th>
                                <th>FullName</th>
                                <th>School</th>
                                <th>Baranggay</th>
                                <th>Signature</th>
                                </tr>
                            </thead>
                            <?php
                            $no=1
                            ?>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM students WHERE (brgy = 'sagaba' AND status = 'scholars') ORDER BY scholar_id ASC";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr style="font-weight: normal; color: black">
                                            <td><?php echo $student['scholar_id'];?> </td>
                        <td><?php echo $student['fname'],',',$student['mname'],'.',$student['lname'];?> </td>
                        <td><?php echo $student['school'];?> </td>
                        <td><?php echo $student['brgy'];?> </td>
                        <td> </td>
                                                       
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                            </tbody>
            </table> 
            <div class="text-center">
            <a href="http://localhost/SIMS1/napplic.php" class="btn btn-primary" style="float: right;" >Cancel</a>
                <button onclick="window.print()" class="btn btn-primary" style="float: right; margin-right: 10px; ">Print</button>

            </div>
            
         
            
                

            </div>
        </div>

        <?php
$count_query = "SELECT * FROM students WHERE status= 'scholars' AND brgy='sagaba' ";
$count_query_run = mysqli_query($con, $count_query );

if ($category_total = mysqli_num_rows($count_query_run))
{
  echo '<center><p style="color: black;  margin-top: 20px; "> total:' .$category_total. '</p>';
}
else{

}
?>




</body>  
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>



