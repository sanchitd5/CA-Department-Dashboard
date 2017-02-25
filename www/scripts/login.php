<?php
include'db.php';
session_start();

$username= mysqli_real_escape_string($con, $_POST['user']);
$password= mysqli_real_escape_string($con, $_POST['pass']);
$sql="SELECT * FROM ca_users WHERE username = '$username' AND Password = '$password'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1)
{
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$_SESSION['name'] = $row['name'];
	$_SESSION['login_session'] = 1;
	echo 'true';

}
else
{
	echo 'false';
}
?>