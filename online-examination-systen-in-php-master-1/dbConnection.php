<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$dbname = 'project';
$con= new mysqli('localhost','root','root','project')or die("Could not connect to mysql".mysqli_error($con));

// try {
//     $con = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$password");
//     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // echo 'Connected successfully';
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }
// require __DIR__ . '/vendor/autoload.php';
