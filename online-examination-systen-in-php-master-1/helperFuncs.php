<?php

// checking user inputted data before using it at any cost
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    return $data;
}

function getCurrentUserDetails($email)
{
    global $con;
    $stmt = $con->prepare('SELECT * FROM user WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getCurrentFacultyDetails($email)
{
    global $con;
    $stmt = $con->prepare('SELECT * FROM admin WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getEmailDetails($email, $type)
{
    $subject = '';
    $message = '';
    $result = sendEmail($subject, $message, $email, $type);
    if(!$result){
        return true;
    }
    else{
        return false;
    }
}

function sendEmail($subject, $email, $message, $type)
{
    $template = emailTemplate($subject, $email, $message, $type);
    $SENDGRID_API_KEY = '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';
    $url  = 'https://api.sendgrid.com/v3/mail/send';
    $headers   = array(
        "Authorization: Bearer $SENDGRID_API_KEY",
        'Content-Type: application/json'
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($template));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

function emailTemplate($subject, $email, $message, $type)
{
    $my_email = 'chirag.webdeveloper123@gmail.com';
    $my_name = 'Chirag Gupta';

    $template = array();
    if ($type === 'forgot') {
        $template = array(
            'personalizations' => array(
                array(
                    'to' => array(
                        array(
                            'email' => $email
                        )
                    )
                )
            ),
            'from' => array(
                'email' => $my_email,
                'name' => $my_name
            ),
            'subject' => $subject,
            'content' => array(
                array(
                    'type' => 'text/html',
                    'value' => $message
                )
            )
        );
    } else if ($type == 'resetPass') {
        $template = array(
            'personalizations' => array(
                array(
                    'to' => array(
                        array(
                            'email' => $email
                        )
                    )
                )
            ),
            'from' => array(
                'email' => $my_email,
                'name' => $my_name
            ),
            'subject' => $subject,
            'content' => array(
                array(
                    'type' => 'text/html',
                    'value' => $message
                )
            )
        );
    } else if ($type == 'register') {
        $template = array(
            'personalizations' => array(
                array(
                    'to' => array(
                        array(
                            'email' => $email
                        )
                    )
                )
            ),
            'from' => array(
                'email' => $my_email,
                'name' => $my_name
            ),
            'subject' => $subject,
            'content' => array(
                array(
                    'type' => 'text/html',
                    'value' => $message
                )
            )
        );
    } else if ($type == 'sendCredential') {
        $template = array(
            'personalizations' => array(
                array(
                    'to' => array(
                        array(
                            'email' => $email
                        )
                    )
                )
            ),
            'from' => array(
                'email' => $my_email,
                'name' => $my_name
            ),
            'subject' => $subject,
            'content' => array(
                array(
                    'type' => 'text/html',
                    'value' => $message
                )
            )
        );
    } else {
        $template = NULL;
    }

    return $template;
}
