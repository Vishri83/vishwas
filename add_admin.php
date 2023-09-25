<?php 
session_start();
error_reporting(0);

include 'config.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = ($_POST['password']);
	$cpassword = ($_POST['cpassword']);

    //$sql1 = "SELECT * FROM login WHERE email='$email' ";
	$sql1 = "SELECT `login_id`, `email`, `name`, `user_id`, `password` FROM `login` WHERE 'email'='$email'";
    $result1 = mysqli_query($conn, $sql1);
    if (!$result1->num_rows > 0) {
	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE email='$email' AND username = '$username' ";
		$result = mysqli_query($conn, $sql);
		if ($result->num_rows > 0) {
            $row = $result->fetch_row();
			//$sql = "INSERT INTO `login`(`login_id`, `email`, `user_id`, `password`) VALUES (NULL,'$email','$row[0]','$password ')";
			$sql = "INSERT INTO `login`(`login_id`, `email`, `name`, `user_id`, `password`) VALUES (NULL,'$email','$username','$row[0]','$password ')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! Admin Registration Completed.') </script>";
			    //$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('register as a user to become an ADMIN.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}else {
    echo "<script>alert('admin alredy exist.')</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Admin  Form </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styleal.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>


<div class="main">
<div class="container">
		<form action="" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Add New Admin</p>
			<div class="input-group">
				<input type="text" placeholder="admin name" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="admin@gmail.com" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Add Admin</button>
			</div>
			</div> 
        <div class="navbar1">
                <ul>
                    
					<li style="float:right;"><a href="index.php">LOGOUT</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a href="feedback_content.php">FEEDBACK DETAILS</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a href="registeration_detais.php">REGISTERTION DETAILS</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a href="content.php">USERS DETAILS</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a href="extra2.php">ADMIN DETAILS</a></li>
					<li style="border-right: 1px solid #bbb;float:right;"><a class= "active" href="admin_login.php">HOME</a></li>
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
