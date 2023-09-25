<?php 
include 'config.php';
error_reporting(0);

$user_id= $_GET['li'];
echo $user_id;
$sql1 = "DELETE FROM `login` WHERE login_id = '$user_id'";

$result1 = mysqli_query($conn, $sql1);

if($result1)
{
    echo "<script>alert('admin removed');location.replace('extra2.php')</script>";
}
else
{
    echo "<script>alert('user not deleted')</script>";
}
?>