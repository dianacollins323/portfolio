<?php
    if (isset($_POST['submit'])) {
        $trimEmail = trim($_POST['email']);
        $email = urldecode($trimEmail);

        if (trim($_POST['name'] == '')) {
            $errors[] = 'Please enter your name.';
        }
        else {
            $name = trim($_POST['name']);
        }

        if ($email == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Please enter a valid email address.';
        }

        if (trim($_POST['subject'] == '')) {
            $errors[] = 'Please enter a subject.';
        }
        else {
            $subject = trim($_POST['subject']);
        }

        if (trim($_POST['message']) == '') {
            $errors[] = 'Please enter a comment in the message area.';
        }
        else {
            $message = trim($_POST['message']);
        }

        header('Content-type: application/json');
        $response = array();
        if (count($errors) > 0) {
            $response['response'] = 'error';
            $response['errors'] = $errors;
        }
        else{
            $nameOut = str_replace("+", " ", $name);
            $subjectOut = str_replace("+", " ", $subject);
            $messageOut = str_replace("+", " ", $message);
            $emailto = 'dianacollins323@gmail.com';
            $header = "Message from diana.franticpedantic.com";
            $body = 'Name: ' . $nameOut . "\r\n" . 'Subject: ' . $subjectOut . "\r\n" . 'Message: ' . $messageOut . "\r\n" . 'Reply-To: ' . $nameOut . " ".$email;
            @mail($emailto, $header, $body);
            $emailSent = true;
            $response['response'] = 'ok';
        }
        echo json_encode($response);
    }
?>