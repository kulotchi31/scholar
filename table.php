<?php
require 'connect.php';
include('includes/header.php'); 
include('includes/navbar.php');



 
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



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



<div class="container mt-4">

<?php include('message.php'); ?>


<?php 
if(isset($_POST['scholar'])){

	$id = $_POST['id'];
	$select = "UPDATE students SET status = 'scholars' WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);
}
 ?>



<?php 
if(isset($_POST['reject'])){

	$id = $_POST['id'];
	$select = "UPDATE students SET status = 'rejected' WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);
	
}

 ?>

<?php 
if(isset($_POST['pend'])){

	$id = $_POST['id'];
	$select = "UPDATE students SET status = 'pending' WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);
	
}

 ?>


 <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="table.php" method="POST">

                    <div class="modal-body">

                    

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Yes</button>
                        <input class="btn btn-info btn-sm comfirm-delete"  type="submit" name="scholar"   value="Accept">
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <!-- <script>
        $(document).ready(function () {

            $('.comfirm-delete').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#id').val(data[0]);

            });
        });
    </script> -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color:cornflowerblue;">
                <h3>Applicants
                
                    <!--<a href="student-create.php" class="btn btn-primary float-end">Add Students</a>-->
                </h3>
            </div>
            <div class="card-body" >
                

            <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Student Name</th>
                                    <th>BirtDate</th>
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
                                    $query = "SELECT * FROM students WHERE status = 'applicants' ORDER BY id ASC";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?php echo $no ;?></td>
                                                <td><?= $student['lname'], ', ' ,$student['fname'],', ',$student['mname'], '.'?></td>
                                                <td><?= $student['birth']; ?></td>
                                                <td><?= $student['school']; ?></td>
                                                <td><?= $student['course']; ?></td>
                                                <td><?= $student['brgy']; ?></td>
                                                <td>
                                                       <form action="table.php" method="POST">
                                                       <a href="update.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm comfirm-delete">View</a>
                                                       <!-- <a href="student_view.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">View</a>  -->
		                                              <input type="hidden" name="id" value="<?php echo $student['id']; ?>"/>
                                                      <!-- <a href='table.php?id=$student[id]'><input class="btn btn-info btn-sm comfirm-delete" value="Accept" type="submit" onclick="return checkaccept()" name="scholar"> -->
	                                                  <!-- <a href='table.php?id=$student[id]'><input class="btn btn-warning btn-sm comfirm-delete" value="Pend" type="submit" onclick="return checkpend()" name="pend"> 
                                                      <a href='table.php?id=$student[id]'><input class="btn btn-danger btn-sm comfirm-delete" value="Reject" type="submit" onclick="return checkreject()" name="reject">
    -->
                                                      <!-- <input  class="btn btn-danger btn-sm" type="submit" name="reject" value="Reject"> -->
                                                      
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

<script>
    function checkreject(){
        return  confirm("Are you sure you want to REJECT this data?"); 
    }
</script>

<script>
    function checkpend(){
        return  confirm("Are you sure you want to PEND this data?"); 
    }
</script>











