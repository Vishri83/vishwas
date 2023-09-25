<?php 
session_start();
error_reporting(0);

include 'config.php';

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);

	//$sql = "SELECT * FROM login WHERE email='$email'  ";
	$sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $sql1 = "SELECT * FROM user WHERE email='$email'  ";
	$result = mysqli_query($conn, $sql);
    $result1 = mysqli_query($conn, $sql1);
    if ($result1->num_rows > 0) {
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: add_admin.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
    }else {
		echo "<script>alert('Woops! Email or Password is not admin registered.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Admin Login Form </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styleal.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>


<div class="main">
<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Admin Login only</p><br>
			<div class="input-group">
				<input type="email" placeholder="admin@email.com" name="email"  >
			</div><br>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password"  >
			</div><br>
			<div class="input-group">
				<button name="submit" class="btn">Login</button><br><br><br>
                <p>note :   it   is   only   for   admins</p>
			</div> 
        <div class="navbar1">
                <ul>
					<li style="float:right;"><a href="https://www.linkedin.com/in/bharath-r-19a902225/">CONTACT</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a href="feedback.php">FEEDBACK</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a href="http://localhost/new/eventlist.php">EVENTS</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a href="about.php">ABOUT</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a class= "active" href="http://localhost/tharun/index.php">HOME</a></li>
					<li style="background-color:#ff7200;padding:20px 25px 20px 20px;">EVENT  MANAGEMENT SYSTEM</li>
					<i class="fas fa-bars"></i>
                </ul>
        </div>
                </div>
        </div>
    </div>
    
		</form>
	</div>
</body>
</html>



