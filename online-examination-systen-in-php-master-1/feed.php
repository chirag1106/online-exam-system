<?php
require_once './dbConnection.php';
require_once './helperFuncs.php';
include './error.php';
function myErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "<b>Custom error:</b> [$errno] $errstr<br>";
    echo " Error on line $errline in $errfile<br>";
}
function on_error($num, $str, $file, $line) {
    echo "Encountered error $num in $file, line $line: $str\n";
    echo '<br>';
}

set_error_handler("myErrorHandler",E_PARSE);
set_error_handler("on_error");
// if (isset($_POST['fbemail'])) {
    $fbname = test_input($_POST['fbname']);
    $fbsubject = test_input($_POST['fbsubject']);
    $fbemail = test_input($_GET['fbemail']);
    if (!filter_var($fbemail, FILTER_VALIDATE_EMAIL)) {
        echo 'Please enter valid email';
        exit();
    } else {
        $fbemail = filter_var($fbemail, FILTER_SANITIZE_EMAIL);
    }
    $fbmsg = test_input($_POST['fbmsg']);
    $id = uniqid();
    $date = date("Y-m-d");
    $time = date("h:i:sa");
    try {
        // Set user-defined error handler function
        $stmt = $con->prepare('INSERT INTO feedback VALUES  (:id , :name, :email , :subject, :fbmsg , :date , :time)');
        // if($stmt == 0)trigger_error('custom error');
        // $stmt->bindParam(1,$id);
        $result = $stmt->execute([':id' =>$id, ':name' =>$fbname, ':email' =>$fbemail, ':subject' =>$fbsubject, ':fbmsg' =>$fbmsg, ':date' =>$date, ':time' =>$time]);
        // print_r($result);
        echo 'Feedback Submitted Successfully';
    } catch (PDOException $e) {
        echo 'Sql query error '.$e->getMessage();
    }
    // throw new Exception;


    //  header("location:$ref?q=Thank you for your valuable feedback");
// }
    // else{
    //     header("location:../index.php");
    //     exit();
    // }
