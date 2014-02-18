<?php
    if (isset($_POST['submit'])) {

        if (trim($_POST['name'] == '')) {
            $errors[] = 'Please enter your name.';
        }
        else {
            $name = trim($_POST['name']);
        }

        if (trim($_POST['email'] == '') || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Please enter a valid email address.';
        } 
        else {
            $email = trim($_POST['email']);
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

        if (count($errors) > 0) {
            echo "<html><head></head><body>";
            for ($i = 0; $i < count($errors); $i++) {
                echo "<h3 class=\"h-3\">$errors[$i]</h3>";
            }
            echo "</body></html>";
        }
        else{
            $emailto = 'dianacollins323@gmail.com';
            $body = 'Name: $name <br> Email: $email <br> Subject: $subject <br> Message: $message';
            $headers = 'From: Diana Collins<'.$emailto.'>' . "\r\n" . 'Reply-To: ' .$email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
            @mail($emailto, $body, $headers);
            $emailSent = true;
            //echo "Your message has been sent. <br>";
            //echo "Thank you, $name, for your email. <br>";
            //echo "<a href='../contact.html'>Back to Contact Form</a>";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
?>