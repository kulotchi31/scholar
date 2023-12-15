<?php
include('includes/header.php'); 
include('includes/navbar.php');
require 'dbcon.php'; 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student CRUD</title>
</head>
<body>

<div class="container mt-4">

<?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>New Applicants
                
                    <!--<a href="student-create.php" class="btn btn-primary float-end">Add Students</a>-->
                </h4>
            </div>
            <div class="card-body">
                

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Birth Date</th>
                            <th>Phone</th>
                            <th>School Name</th>
                            <th>Email Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM students";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $student)
                                {
                                    ?>
                                    <tr>
                                        
                                      
                                        <td><?= $student['birth']; ?></td> 
                                        <td><?= $student['phone']; ?></td>
                                        <td><?= $student['school']; ?></td>
                                        <td><?= $student['email']; ?></td>
                                        
                                        
                                        <td>
                                            <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                            <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>

                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="update_student" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Accept</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>





</body>
</html>
  
   



<?php
include('includes/footer.php');
?>