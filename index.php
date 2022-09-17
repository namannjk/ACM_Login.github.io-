<?php
session_start();
include "connection.php";
error_reporting(0);

$email = $_POST['email'];
$password = $_POST['password']; 

if(isset($_POST['submit']))
{

$sql = "SELECT * FROM signup where email = '$email' && password = '$password'";

$result= mysqli_query($conn,$sql); 
$row = mysqli_num_rows($result);
if($row > 0){

$_SESSION['email'] = "$email";
$_SESSION['password'] = "$password";

// echo'<script> 
// alert("you logged in successfully")
//       </script>';
	  echo'<script> 
            window.location.href="./page/Index.html"
      </script>';

if($result){
    echo "yes";
}
else{
    echo "no";
}
}
}
?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login / Sign up</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<h2></h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action=" " method="post" enctype="multipart/form-data">
			<h1>Create Account</h1> <br>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<!-- <span>or use your email for registration</span> -->
			<!-- <input type="hidden" name="employee_id" placeholder="id" /> -->
			<input type="text" name="name" placeholder="Name" />
			<input type="text" name="number" placeholder="Number" />
			<input type="text" name="address" placeholder="Address" />
			<input type="text" name="department" placeholder="Department" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<!-- <input type="password" name="" placeholder="Password" /> -->
			<button type="submit" name="submit">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container" id="log">
		<form a ction="#" method="POST" enctype="multipart/form-data">
			<h1>Login</h1> <br>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<!-- <span>or use your account</span> -->
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button type="submit" name="submit">Log In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" onclick="loginShow()" id="signIn" >Log In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button onclick="loginHide()" class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script>
	function loginHide(){
		document.getElementById("log").style.display = "none";
	}

	function loginShow(){
		document.getElementById("log").style.display = "block";
	}
</script>	

<!-- <footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer> -->
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>


<?php

include "connection.php";
error_reporting(0);

$c_id = $_POST['c_id'];
$name = $_POST['name'];
$number = $_POST['number'];
$address = $_POST['address'];
$department = $_POST['department'];
$email = $_POST['email'];
$password = $_POST['password'];

if(isset($_POST['submit']))
{

// $sql ="INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$password')";
// $result = mysqli_query($conn,$sql);
// $c_id = mysqli_insert_id($conn);




$sql2 = "INSERT INTO `signup` (`c_id`, `name`, `number`, `address`,`department`, `email`, `password`) VALUES ('$c_id', '$name', '$number', '$address', '$department', '$email', '$password')";
$result2 = mysqli_query($conn,$sql2);

}



?>
