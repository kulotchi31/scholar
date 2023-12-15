<?php
require 'connect.php';
session_start()
?>
<?php
    $sql = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

<?php
// Check if a specific value should disable the button
$disableButton = false; // Initialize as false
$specificValue = $row['status']; // Replace 'some_value' with the value you want to check

// Check if the specific value matches the condition to disable the button
if ($specificValue === 'scholars') {
    $disableButton = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Disable Button for Specific Value</title>
</head>
<body>
    <!-- Your button with the disabled attribute based on the condition -->
    <button <?php if ($disableButton) echo 'disabled'; ?> type="button">Submit</button>
</body>
</html>
