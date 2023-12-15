<?php  require 'dbcon.php';  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	

<h1 class="text-center  text-white bg-dark col-md-12">PENDING LIST</h1>

<table class="table table-bordered col-md-12">
  <thead>
    <tr>
      <th scope="col">First Name</th>
	 <th scope="col">Middle Name</th>
	 <th scope="col">Last Name</th>
	 <th scope="col">Birth Day</th>
   <th scope="col">School Name</th>
   <th scope="col">Email</th>
   <th scope="col">Status</th>
	 <th scope="col">ACTION</th>
    </tr>
  </thead>

<?php 

$query = "SELECT * FROM  students WHERE status = 'pending' ORDER BY id ASC";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))  { ?>


  <tbody>
    <tr>
      
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['mname']; ?></td>
      <td><?php echo $row['lname']; ?></td>
      <td><?php echo $row['birth']; ?></td>
      <td><?php echo $row['school']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['status']; ?></td>


     <td>
		<form action="approved.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
		<input type="submit" name="approve" value="approve"> &nbsp &nbsp <br>
		 <input type="submit" name="delete" value="delete"> 

		</form>
   </td>
    </tr>
   
  </tbody>
  <?php } ?>
</table>


<?php 
if(isset($_POST['approve'])){

	$id = $_POST['id'];
	$select = "UPDATE students SET status = 'approved' WHERE id = '$id' ";
	$resut = mysqli_query($conn,$select);
	header("location:approved.php");
}


if(isset($_POST['delete'])){

	$id = $_POST['id'];
	$select = "DELETE  FROM students  WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);
	header("location:approved.php");
}

 ?>






<!-- ================================================================== -->



 
&nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp  &nbsp 


 <h1 class="text-center  text-white bg-success col-md-12
">APPROVED LIST </h1>

<table class="table table-bordered col-md-12">
  <thead>
    <tr>
    <th scope="col">First Name</th>
	 <th scope="col">Middle Name</th>
	 <th scope="col">Last Name</th>
	 <th scope="col">Birth Day</th>
   <th scope="col">School Name</th>
   <th scope="col">Email</th>
   <th scope="col">Status</th>
	 
    </tr>
  </thead>

<?php 
$query = "SELECT * FROM  students WHERE status = 'approved' ORDER BY id ASC" ;
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) { ?>


  <tbody>
    <tr>
      
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['mname']; ?></td>
      <td><?php echo $row['lname']; ?></td>
      <td><?php echo $row['birth']; ?></td>
      <td><?php echo $row['school']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['status']; ?></td>
    </tr>
  </tbody>

  <?php } ?>

</table>

</body>
</html>