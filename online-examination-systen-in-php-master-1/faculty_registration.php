<?php

require_once './dbConnection.php';
require_once './helperFuncs.php';

if(isset($_POST['femail']) && !empty($_POST['femail']) ){

    echo "Registration Successful";
}


?>