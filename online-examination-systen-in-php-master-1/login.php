<?php
session_start();
if (isset($_SESSION['email'])) {
	session_destroy();
}

require_once './dbConnection.php';
require_once './helperFuncs.php';

if (isset($_GET['q']) && !empty($_GET['q'])){
	$ref = $_GET['q'];
}
else{
	header("location:./index.php");
	exit();
}

if(isset($_POST['stu-email']) && isset($_POST['stu-password']) && !empty($_POST['stu-email']) && !empty($_POST['stu-password']) ){
	$email = test_input($_POST['stu-email']);
	$password = test_input($_POST['stu-password']);
}
else{
	echo 'Enter Your Email Id';
	exit();
}
$password = md5($password);
$stmt = $con->prepare('SELECT * FROM user WHERE email = ? and password = ?');
$stmt->bind_param('ss',$email,$password);
$stmt->execute();
$result  = $stmt->get_result();
$count = $result->num_rows;
if ($count == 1) {
	while ($row = mysqli_fetch_assoc($result)) {
		$name = $row['name'];
	}
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	// header('location:account.php?q=1');
	echo 'login';
} 
else
{
	echo 'Wrong Username or Password';
	exit();
}
