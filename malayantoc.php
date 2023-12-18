<?php
include('includes/header.php'); 
include('includes/navbar.php');
require 'connect.php'; 
?>


<div class="container mt-4">

<?php include('message.php'); ?>


                    <!--<a href="student-create.php" class="btn btn-primary float-end">Add Students</a>-->
                </h4>
            </div>
            <div class="card-body">

            <div class="container mt-4" style="font-weight: bolder; color: black">

<?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color:cornflowerblue;">
            <div class="dropdown" style="float: right;">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
Filter
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
<li><a class="dropdown-item" href="malayantoc.php">All</a></li>
<li><a class="dropdown-item" href="malayantoc-m.php">Male</a></li>
<li><a class="dropdown-item" href="malayantoc-f.php">Female</a></li>
</ul>
</div>
                <h2>Malayantoc
                
                    <!--<a href="student-create.php" class="btn btn-primary float-end">Add Students</a>-->
                </h2>
            </div>
            <div class="card-body">
            <table class="table table-bordered table-striped">
      <thead>
        <tr style="font-weight: bolder; color: black">
           <th>Id</th>                       
           <th>Student Name</th>
           <th>BirthDate</th>
           <th>School Name</th>
           <th>Course</th>
           <th>Baranggay</th>
           <th>Status</th>
           <th>Action</th>
        </tr>
      </thead>
      <?php $no=1 ?>
         <tbody>
        <?php 
           $query = "SELECT students.*,course_tbl.*,university_tbl.* FROM students join course_tbl on fk_course_id=Course_ID join university_tbl on fk_university_id=university_id WHERE (brgy = 'malayantoc' AND status = 'scholars') ORDER BY id ASC";
           $query_run = mysqli_query($con, $query);

           if(mysqli_num_rows($query_run) > 0)
           {
           foreach($query_run as $student)
            {
            ?>
                <tr style="font-weight: normal; color: black">
                   <td><?= $student['lname'], ', ' ,$student['fname'],', ',$student['mname'], '.'?></td>
                   <td><?php echo $no ;?></td>
                   <td><?= $student['birth']; ?></td>
                   <td><?= $student['university_name']; ?></td>
                   <td><?= $student['Course']; ?></td>
                   <td><?= $student['brgy']; ?></td>
                   <td><?= $student['status']; ?></td>
                   <td>
          <form action="table.php" method="POST">
           <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">View</a>
                                                       
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
            <div class="text-center">
                <a href="report/malayantoc.php" class="btn btn-primary" style="float: right;" >Print</a>
            </div>
                

            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>





  
   



