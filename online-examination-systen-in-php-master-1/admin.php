<?php

require_once './dbConnection.php';
require_once './helperFuncs.php';

if(isset($_POST['admin-email']) && isset($_POST['admin-password']) && !empty($_POST['admin-email']) && !empty($_POST['admin-password']) ){
	$email = test_input($_POST['admin-email']);
    $password = test_input($_POST['admin-password']);
}
else{
	echo 'Enter valid Admin Profile';
	exit();
}

$stmt = $con->prepare('SELECT * FROM admin WHERE email = ? and password = ?');
$stmt->bind_param('ss',$email, $password);
$stmt->execute();
$result = $stmt->get_result();
$count = $result->num_rows;
// $count=mysqli_num_rows($result);
if($count == 1){
session_start();
if(isset($_SESSION['email'])){
    session_unset();
}
$_SESSION["name"] = 'Admin';
$_SESSION["key"] ='sunny7785068889';
$_SESSION["email"] = $email;
echo 'login';
// header("location:dash.php?q=0");
}
else {
    // header("location:$ref?w=Warning : Access denied");
    echo 'Access denied';
    exit();
}
?>