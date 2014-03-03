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
            $emailto = 'dianacollins323@gmail.com';
            $body = 'Name: $name <br> Email: $email <br> Subject: $subject <br> Message: $message';
            $headers = 'From: Diana Collins<'.$emailto.'>' . "\r\n" . 'Reply-To: ' .$email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
            @mail($emailto, $body, $headers);
            $emailSent = true;
            $response['response'] = 'ok';
        }
        echo json_encode($response);
    }
?>