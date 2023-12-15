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

<?php 

  if(isset($_POST['loginadmin'])) {

    $uname = clean($_POST['username']);
    $pword = clean($_POST['password']);

    $query = "SELECT * FROM students WHERE username = '$uname' AND password = '$pword'";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_assoc($result);


      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];

      header("location:homescho.php");
      exit;

    } else {
      $_SESSION['errprompt'] = "Wrong username or password.";
    }

  }

  

?>
<style>
	@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background-image: url(pic1.jpg);
	background-size: cover;
}
::selection{
  background: #fa4299;
  color: #fff;
}
.wrapper{
  overflow: hidden;
  padding: 29.9px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  margin-top: 133.5px;
  border-bottom-right-radius: 25px;
  border-bottom-left-radius: 25px;
  background: whitesmoke;

 
}
.wrapper .title-text{
  display: flex;
  width: 200%;
}

.wrapper .title{
  width: 50%;
  font-size: 30px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
  margin-top: -12px;
  margin-bottom: -20px;
}
.wrapper .slide-controls{
  position: relative;
  display: flex;
  height: 50px;
  width: 100%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: 1px solid lightgrey;
  border-radius: 5px;
}
.slide-controls .slide{
  height: 100%;
  width: 100%;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-align: center;
  line-height: 48px;
  cursor: pointer;
  z-index: 1;
  transition: all 0.6s ease;
}
.slide-controls label.signup{
  color: #000;
}
.slide-controls .slider-tab{
  position: absolute;
  height: 100%;
  width: 50%;
  left: 0;
  z-index: 0;
  border-radius: 5px;
  background: rgb(165,163,191);
  background: linear-gradient(90deg, rgba(165,163,191,1) 0%, rgba(9,9,121,1) 50%, rgba(0,212,255,1) 100%);

  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
input[type="radio"]{
  display: none;
}
#signup:checked ~ .slider-tab{
  left: 50%;
}
#signup:checked ~ label.signup{
  color: #fff;
  cursor: default;
  user-select: none;
}
#signup:checked ~ label.login{
  color: #000;
}
#login:checked ~ label.signup{
  color: #000;
}
#login:checked ~ label.login{
  cursor: default;
  user-select: none;
}
.wrapper .form-container{
  width: 100%;
  overflow: hidden;
}
.form-container .form-inner{
  display: flex;
  width: 200%;
}
.form-container .form-inner form{
  width: 50%;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.form-inner form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
}
.form-inner form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
}
.form-inner form .field input:focus{
  border-color: #fc83bb;
  /* box-shadow: inset 0 0 3px #fb6aae; */
}
.form-inner form .field input::placeholder{
  color: #999;
  transition: all 0.3s ease;
}
form .field input:focus::placeholder{
  color: #b3b3b3;
}
.form-inner form .pass-link{
  margin-top: 5px;
}
.form-inner form .signup-link{
  text-align: center;
  margin-top: 30px;
}
.apply{
  text-align: center;
  margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
  color: #fa4299;
  text-decoration: none;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
  text-decoration: underline;
}
form .btn{
  height: 50px;
  width: 100%;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}
form .btn .btn-layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: rgb(165,163,191);
  background: linear-gradient(90deg, rgba(165,163,191,1) 0%, rgba(9,9,121,1) 50%, rgba(0,212,255,1) 100%);
  border-radius: 5px;
  transition: all 0.4s ease;;
}
form .btn:hover .btn-layer{
  left: 0;
}
form .btn input[type="submit"]{
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  padding-left: 0;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
}
#lag{
	width: 33%;
	height: 20%;
	background-color: azure;
	position: absolute;
	margin-bottom: 460px;
	background-image: url(pic2.jpg);
	background-size: cover;
	width: 37.4%;
	height: 25%;
	border-top-left-radius: 25px;
	border-top-right-radius: 25px;
  
  
 
}




</style>



<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login and Registration Form in HTML | CodingNepal</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
   <form id="lag" class="shadow w-450 p-3"  
    	      method="post">
			 

    		<h4 class="display-4  fs-1"></h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		
		</form>
     
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Student Login
            </div>
            <div class="title signup">
               Admin Login
            </div>
         </div>
        
         
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Student</label>
               <label for="signup" class="slide signup">Admin</label>
               <div class="slider-tab"></div>
            </div>
            
            <?php 
if(isset($_SESSION['prompt'])) {
  showPrompt();
}
if(isset($_SESSION['errprompt'])) {
  showError();
}
?>

           
            <div class="form-inner">
            
            
               <form action="reg1.php" class="login" method="post">
               
                  <div class="field">
                     <input type="text" name="username" value="" placeholder="Username" required>
                  </div>
                  <div class="field">
                     <input type="password"  name="password" value="" placeholder="Password" required>
                  </div>
                  
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="login" value="Log In" >
                  </div>

                  <div class="apply">
                     New applicant? <a href="reg.php">Apply now</a>
                  </div>
               </form>
               <form action="reg1.php" class="loginadmin" method="post">
               
               <div class="field">
                  <input type="text" name="username" value="" placeholder="Username" required>
               </div>
               <div class="field">
                  <input type="password"  name="password" value="" placeholder="Password" required>
               </div>
                
               <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="loginadmin" value="Log In" >
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
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