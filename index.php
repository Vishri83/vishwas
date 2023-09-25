<?php 
session_start();
error_reporting(0);

include 'config.php';

//session_start();

//error_reporting(0);

//if (isset($_SESSION['username'])) {
  //  header("Location:booking_payment.php");
//}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);

	//$sql = "SELECT * FROM user WHERE email='$email'  ";
	$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: booking_payment.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>


<div class="main">
        <div class="navbar1">
                <ul>
					<li style="float:right;"><a href="https://www.linkedin.com/in/bharath-r-19a902225/">CONTACT</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a href="feedback.php">FEEDBACK</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a href="eventlist.php">EVENTS</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a href="about.php">ABOUT</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a href="admin_login.php">ADMIN LOGIN</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a class= "active" href="index.php">HOME</a></li>
					<li style="background-color:#ff7200;padding:20px 25px 20px 20px;">EVENT  MANAGEMENT SYSTEM</li>
					<i class="fas fa-bars"></i>
                </ul>
        </div>
        <div class="content">
            
                <button class="cn"><a href="register.php">JOIN US</a></button>
                
                    </div>
                </div>
        </div>
    </div>
    
   <div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email"  >
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  >
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>