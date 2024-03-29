<?php
session_start();
if (isset($_SESSION['email'])) {
	session_destroy();
}

require_once './dbConnection.php';
require_once './helperFuncs.php';
require_once './error.php';
if (isset($_POST['stu-email']) && isset($_POST['stu-password']) && !empty($_POST['stu-email']) && !empty($_POST['stu-password'])) {
	$email = test_input($_POST['stu-email']);
	$password = test_input($_POST['stu-password']);
}
$loggedUser = getCurrentUserDetails($email);
	// print_r($loggedUser);
if (empty($loggedUser)) {
	echo 'Enter valid Login ID';
	exit();
} else if(!password_verify($password, $loggedUser['password'])) {
	echo 'Wrong Password';
	exit();
}

$stmt = $con->prepare('SELECT * FROM user WHERE email = ? and password = ?');
$stmt->bind_param('ss', $email, $loggedUser['password']);
$stmt->execute();
$result  = $stmt->get_result();
$count = $result->num_rows;
if ($count == 1) {
	$row = mysqli_fetch_assoc($result);
	$name = $row['name'];
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	if (!empty($_POST['remember-me'])) {
		setcookie('se', $email, time() + (30 * 24 * 60 * 60), '/');
		setcookie('sp', $password, time() + (30 * 24 * 60 * 60), '/');
	}
	echo 'login';
}
