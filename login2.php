<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_POST['login'])) {

    $uname = clean($_POST['username']);
    $pword = clean($_POST['password']);

    $query = "SELECT * FROM students WHERE username = '$uname' AND password = '$pword'";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_assoc($result);


      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];

      header("location:home.php");
      exit;

    } else {
      $_SESSION['errprompt'] = "Wrong username or password.";
    }

  }

  if(!isset($_SESSION['username'], $_SESSION['password'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<style>
#log{
	background-image: url(pic1.jpg);
	background-size: cover;
	width: 100%;
	height: 150%;

	
}
#logs{
	width: 37%;
	height: 50%;
	background: whitesmoke;
	margin-top: 170px;
	opacity: calc(0.8);
	border-bottom-left-radius: 25px;
	border-bottom-right-radius: 25px;
    

}
#lag{
	width: 32%;
	height: 20%;
	background-color: azure;
	position: absolute;
	margin-bottom: 320px;
	background-image: url(pic2.jpg);
	background-size: cover;
	width: 37%;
	height: 25%;
	border-top-left-radius: 25px;
	border-top-right-radius: 25px;
}
#input1{
	border-radius: 20px;
	width: 250px;
	height: 45px;

	
}

#input{
	border-radius: 20px;
	width: 250px;
	height: 45px;
}
.but{
	border-radius: 20px;
	width: 80px;
	height: 40px;
	color: white;
	background: darkblue;
}
.mb-1{
	padding-top: 20px;
}



</style>



	

    <div class="d-flex justify-content-center align-items-center vh-100" id="log">
		
    
    	<form id="lag" class="shadow w-450 p-3"  
    	      method="post">
			 

    		<h4 class="display-4  fs-1"></h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		
		</form>

		
		
		<form id="logs" class="shadow w-450 p-3" 
    	      method="post">
<?php 
if(isset($_SESSION['prompt'])) {
  showPrompt();
}
if(isset($_SESSION['errprompt'])) {
  showError();
}
?>

    		
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		  <div class="mb-1"><center>
		    <label>username</label>
		    <input id="input1" type="text" value=""
			id="id_password"
		           class="form-control"
		           name="username"
		           value="<?php echo (isset($_GET['username']))?$_GET['password']:"" ?>"  required autofocus>
				   </center>
		  </div>

		  <div class="mb-3"><center>
		    <label>password</label>
		    <input id="input" type="password" value="" 
		           class="form-control"
		           name="password" required ></center>
		  </div>
		  <center>
		  <button class="but" type="submit" name="login" value="Log In" class="btn btn-primary" >Login</button>
		  </center>
		</form>
    </div>
	
		

		



</body>
</html>

<?php

  } else {
    header("location:home.php");
    exit;
  }

  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);

  mysqli_close($con);

?>

<script>
const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>