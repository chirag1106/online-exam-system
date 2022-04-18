<?php

require_once './dbConnection.php';
require_once './helperFuncs.php';

if (isset($_POST['admin-email']) && isset($_POST['admin-password']) && !empty($_POST['admin-email']) && !empty($_POST['admin-password'])) {
    $email = test_input($_POST['admin-email']);
    $password = test_input($_POST['admin-password']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Enter valid Admin Profile';
        exit();
    } else {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }
    $loggedFaculty = getCurrentFacultyDetails($email);
    // print_r($loggedUser);
    if (empty($loggedFaculty)) {
        echo 'Enter valid Login ID';
        exit();
    } else if (!password_verify($password, $loggedFaculty['password'])) {
        echo 'Wrong Password';
        exit();
    }

    $stmt = $con->prepare('SELECT * FROM `admin` WHERE `email` = ? and `password` = ?');
    $stmt->bind_param('ss', $email, $loggedFaculty['password']);
    $stmt->execute();
    $result = $stmt->get_result();
    // print_r($result);
    // exit();
    $count = $result->num_rows;
    if ($count == 1) {
        session_start();
        if (isset($_SESSION['email'])) {
            session_unset();
        }
        $_SESSION["name"] = 'Admin';
        $_SESSION["key"] = 'sunny7785068889';
        $_SESSION["email"] = $email;

        if (!empty($_POST['remember-me'])) {
            setcookie('ae', $email, time() + (30 * 24 * 60 * 60), '/');
            setcookie('ap', $password, time() + (30 * 24 * 60 * 60), '/');
        }
        echo 'login';
    } else {
        echo 'Access denied';
        exit();
    }
} else {
    header("location: ../index.php");
}
