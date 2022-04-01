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

if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']) ){
	$email = test_input($_POST['email']);
	$password = test_input($_POST['password']);
}
else{
	header("location:$ref?w=Enter Your email");
	exit();
}
$password = md5($password);
$stmt = $con->prepare('SELECT * FROM user WHERE email = ? and password = ?');
$stmt->bind_param('ss',$email,$password);
$stmt->execute();
$count = mysqli_num_rows($result);
if ($count == 1) {
	while ($row = mysqli_fetch_array($result)) {
		$name = $row['name'];
	}
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	header('location:account.php?q=1');
} 
else
{
	header("location:$ref?w=Wrong Username or Password");
	exit();
}
