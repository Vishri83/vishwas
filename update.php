<?php 
include 'config.php';
error_reporting(0);

 $ln= $_GET['ln'];
 $em= $_GET['em'];
 $ne= $_GET['ne'];
 $ui= $_GET['ui'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Admin Update Form </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styleal.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>


<div class="main">
<div class="container">
		<form action="" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Update Admin</p>
			<div class="input-group">
				<input type="text"  name="username" value="<?php echo $ne; ?>" required>
			</div>
			<div class="input-group">
				<input type="email"  name="email" value="<?php echo $em; ?>" required>
			</div>
			
			<div class="input-group">
				<button name="submit" class="btn">UPDATE</button>
			</div>
			</div>
                </div>
        </div>
    </div>
    
		</form>
	</div>
</body>
</html>

<?php 

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
    $sql1 = "UPDATE `login` SET `email`='$email',`name`='$username' WHERE `login_id`='$ln'";
    $result1 = mysqli_query($conn, $sql1);
    if ($result1 ) {
		echo "<script>alert('admin details updated ');location.replace('extra2.php')</script>";
	}
	else {
		echo "<script>alert('admin .')</script>";
}
}

?>






