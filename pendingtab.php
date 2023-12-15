<?php
include('includes/header.php'); 
include('includes/navbar.php');
require 'connect.php'; 
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
if(isset($_POST['scholar'])){

	$id = $_POST['id'];
	$select = "UPDATE students SET status = 'scholars' WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);
}


 ?>



<div class="container mt-4">

<?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color:cornflowerblue;">
                <h3>Pending
                
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
                                    $query = "SELECT * FROM students WHERE status = 'pending' ORDER BY id ASC";
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

                                                <form action="pendingtab.php" method="POST">
                                                    <a href="view1.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">View</a>
                                                    
		                                                  <!-- <input type="hidden" name="id" value="<?php echo $student['id']; ?>"/>
                                                          <a href='table.php?id=$student[id]'><input class="btn btn-info btn-sm comfirm-delete" value="Accept Again" type="submit" onclick="return checkaccept()" name="scholar">
    -->
	                                                       	</form>
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
            </table></table></div></div></div></div></div>

</table>

<div class="container mt-4">

<?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color:cornflowerblue;">
                <h3>Updated
                
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
                                    $query = "SELECT * FROM students WHERE status = 'updated' ORDER BY id ASC";
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

                                                <form action="pendingtab.php" method="POST">
                                                    <a href="view1.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">View</a>
                                                    
		                                                  <!-- <input type="hidden" name="id" value="<?php echo $student['id']; ?>"/>
                                                          <a href='table.php?id=$student[id]'><input class="btn btn-info btn-sm comfirm-delete" value="Accept Again" type="submit" onclick="return checkaccept()" name="scholar">
    -->
	                                                       	</form>
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
            </table></table></div></div></div></div></div>

</table>



     

            </div>
        </div>
    </div>
</div>
</div>
<script>
    function checkaccept(){
        return  confirm("Are you sure you want to ACCEPT this data?"); 
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>