<?php

require_once './dbConnection.php';
require_once './helperFuncs.php';
require_once './error.php';

if (isset($_POST['femail']) && !empty($_POST['femail'])) {
    $name = test_input($_POST['fname']);
    $name = ucwords(strtolower($name));
    $gender = test_input($_POST['fgender']);
    $email = test_input($_POST['femail']);
    // $college = test_input($_POST['ucollege']);
    $phoneNo = test_input($_POST['fphoneno']);
    // $phoneNo = (int)$phoneNo;
    $emailStatus = 0;
    $adminStatus = 0; 

    $password = test_input($_POST['fpassword']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Please enter valid email';
        exit();
    } else {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }
    $loggedFaculty = getCurrentFacultyDetails($email);
    // print_r($loggedFaculty); exit();
    if (!empty($loggedFaculty)) {
        echo 'Already registered';
        exit();
    } else {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $con->prepare('INSERT INTO `admin` (`name`, `email`,`gender`,`phone`,`password`,`email_status`,`faculty_status`) VALUES (?, ?, ?, ?, ?, ?, ?)');
        // echo var_dump($stmt); exit();
        $stmt->bind_param('sssssii', $name, $email ,$gender, $phoneNo, $password, $emailStatus, $adminStatus);
        $stmt->execute();
        $result = $stmt->affected_rows;
        if ($result) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            // print_r($_SESSION); exit();
            echo "Registration Successful";
        }
        else {
            echo 'Some error Occured';
        }
    }
}
