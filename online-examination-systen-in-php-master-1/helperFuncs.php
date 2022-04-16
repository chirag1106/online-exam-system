<?php

// checking user inputted data before using it at any cost
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);

    return $data;
}

function getCurrentUserDetails($email){
    global $con;
    $stmt = $con->prepare('SELECT * FROM user WHERE email = ?');
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result = $stmt->get_result();
    // $count = $result->num_rows;
    // if($count == 1){
        $row = mysqli_fetch_assoc($result);
        return $row;
        // print_r($row);
        // return $row['password'];
    // }
    // else{
    //     return 'User not found';
    // }
}

?>