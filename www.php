<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scholarinfosystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>

<?php $sql = "SELECT id, fname, age FROM students";
$result = mysqli_query($conn, $sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>


    




<?php


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    ?>

<tr>
    <td><?php echo $row["id"] ?></td>
    <td><?php echo $row["fname"] ?></td>
    <td><button id='<?php echo $row["id"] ?>' class='btn btn-primary'>Show</button></td>
  </tr>

<?php
   
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>


       
</tbody>
  </table>
  </div>





  <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>






  <script>
$(document).ready(function(){
    $('button').click(function(){
  id_emp = $(this).attr('id')
        $.ajax({url: "zz.php",
        method:'post',
        data:{emp_id:id_emp},
         success: function(result){
    $(".modal-body").html(result);
  }});


        $('#myModal').modal("show");
    })
})

  </script>

</body>
</html>