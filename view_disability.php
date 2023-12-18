<?php
include "connect.php";
include "includes/header.php";
$id = $_GET["id"];
?>


<!doctype html>
<html lang="en">

<head id="head">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <title>Disability View</title>
</head>
<style>
    #studview {
        background-image: url(pic1.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 500px;
        background-attachment: fixed;


    }

    #row {
        opacity: calc(0.8);

    }

    #head {
        padding: 20px;
        background-image: url(pic2.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 200px;


    }

    /* #head:hover{
    opacity: 1.0;

} */



    .img1 {
        width: 20%;
        height: 20%;
        opacity: 1;
    }

    .img1:hover {
        transform: scale(4.5);
        width: 150px;
        height: 150px;
        margin-left: 40%;
        opacity: 1;



    }

    .button {
        text-align: center;
    }
</style>

<?php
//  Update Course 
if (isset($_POST['update'])) {
    $disability_id = $_GET['id'];
    $disability = $_POST['disability'];

    $sql = mysqli_query($con, "UPDATE disability_tbl SET type_of_disability = '$disability' WHERE disability_id = '$disability_id'");
    if ($sql) {
        echo '<script>
        Swal.fire({
            title: "SUCCESS",
            text: "YOU UPDATED DISABILITY SUCCESFULY",
            icon: "success"
          });</script>
        ';
    }
}

//Delete Course
if (isset($_POST['delete'])) {
    $disabilityid = $_GET['id'];

    $sql = mysqli_query($con, "DELETE FROM disability_tbl WHERE disability_id = '$disabilityid'");
    if ($sql) {
        echo "<script>
        Swal.fire({
            title: 'SUCCESS',
            text: 'YOU DELETED DISABILITY SUCCESFULY',
            icon: 'success',
            buttons: {
                confirm : {text:'Ok',className:'sweet-warning'}}
        }).then(function() {
            window.location = 'disability.php';
            });
          </script></script>
        ";
    }
}
?>

<body style="text-align: center;background-color:  skyblue;" id="studview">

    <div class="container mt-5" id="con">

        <div class="row" id="row" style=" padding: 200px;">
            <div class="col-md-12">
                <div class="card" style=" margin-top: -200px; width: 700px; margin-left: 70px">
                    <div class="card-header" id="head">

                    </div>
                    <div class="card-body">

                        <form action="" method="post">

                            <?php
                            if (isset($_GET['id'])) {
                                $disabilityid = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM disability_tbl WHERE disability_id='$disabilityid' ";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    $disability = mysqli_fetch_array($query_run);
                            ?>
                                    <a href="disability.php" class="btn btn-danger float-end">BACK</a>
                                    <h4 style="text-align: center;">DISABILITY</h4>


                                    <div class="mb-3">
                                        <br>

                                        <input type="text" name="disability" class="form-control" value="<?= $disability['type_of_disability'] ?>">
                                    </div>


                    </div>

                    <div class="button">
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteDisability">Delete</button>
                    </div>
                    </form>


            <?php
                                } else {
                                    echo "<h4>No Such Id Found</h4>";
                                }
                            }
            ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Delete Modal -->


<!-- Modal -->
<div class="modal fade" id="deleteDisability" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">
      <div class="modal-body">
        Dou you want to delete this DISABILITY?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-warning" name="delete">Yes! Delete This</button>
      </div>
    </form>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>