<?php
require_once 'dbConnection.php';
require_once './helperFuncs.php';
require_once './error.php';
// print_r($_POST);
// exit();
ob_start();
// if (isset($_POST['uemail'])) {
$name = test_input($_POST['uname']);
$name = ucwords(strtolower($name));
$gender = test_input($_POST['ugender']);
$email = test_input($_POST['uemail']);
// $email = filter_var($email, FILTER_SANITIZE_EMAIL) ;
$college = test_input($_POST['ucollege']);
$phoneNo = test_input($_POST['uphoneno']);
$phoneNo = (int)$phoneNo;
// echo var_dump((int)$phoneNo);
// exit();
$password = test_input($_POST['upassword']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Please enter valid email';
    exit();
}
else{
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
}
$loggedUser = getCurrentUserDetails($email);
// print_r($loggedUser);
// exit();
if (!empty($loggedUser)) {
    echo 'Already registered';
    exit();
} else {
    $password = password_hash($password, PASSWORD_BCRYPT);
    // $password = md5($password);
    // echo $password;
    // exit();
    $stmt = $con->prepare('INSERT INTO user VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->bind_param('ssssss', $name, $gender, $college, $email, $phoneNo, $password);
    $stmt->execute();
    $result = $stmt->affected_rows;
    // print_r($result);
    // exit();
    if ($result) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        echo 'Registered Successfully';
        // header("location:account.php?q=1");
    } else {
        echo 'Some error Occured';
        // header("location:index.php?q7=Email Already Registered!!!");
    }
}
ob_end_flush();
// }
// else{
//     header('location:../index.php');
//     exit();
// }
// $name = stripslashes($name);
// $name = addslashes($name);
// $name = ucwords(strtolower($name));
// $gender = stripslashes($gender);
// $gender = addslashes($gender);
// $email = stripslashes($email);
// $email = addslashes($email);
// $college = stripslashes($college);
// $college = addslashes($college);
// $mob = stripslashes($mob);
// $mob = addslashes($mob);

// $password = stripslashes($password);
// $password = addslashes($password);
