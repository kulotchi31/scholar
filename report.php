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
@media print{
.btn{ 
display: none; 
}
.container{
    margin-left: -10px;
} }     
</style>
<body>
    <h1 class="text-center">Scholars</h1>
    <div class="container">

    <div class="row">
        <div class="col-xl-12">
            

            <table class="table table-bordered tbl">
                <thead>
                    <tr>
                        <th>Scholar ID</th>
                        <th>FullName</th>
                        <th>School</th>
                        <th>Year Level</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Barrangay</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $n=1;
                    $sql="SELECT * FROM students WHERE status = 'scholars' ORDER BY brgy ASC";
                    
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                    ?>
                    <tr>
                        <td><?php echo $row['scholar_id'];?> </td>
                        <td><?php echo $row['fname'],',',$row['mname'],'.',$row['lname'];?> </td>
                        <td><?php echo $row['school'];?> </td>
                        <td><?php echo $row['yearlevel'];?> </td>
                        <td><?php echo $row['phone'];?> </td>
                        <td><?php echo $row['email'];?> </td>
                        <td><?php echo $row['age'];?> </td>
                        <td><?php echo $row['gender'];?> </td>
                        <td><?php echo $row['brgy'];?> </td>
                        
                    
                    </tr>
                    <?php
                   
                    }
                    ?>


                </tbody>
            </table>

            <div class="text-center">
                <a href="schotab.php" class="btn btn-primary" style="float: right;" >Cancel</a>
                <button onclick="window.print()" class="btn btn-primary" style="float: right; margin-right: 10px; ">Print</button>
            </div>
            




        </div>
    </div>
    </div>





</body>  
</html>



