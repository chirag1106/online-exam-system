<?php

// checking user inputted data before using it at any cost
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);

    return $data;
}

?>