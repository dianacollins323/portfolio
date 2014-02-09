<?php
    if (isset($_POST['submit'])) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diana Collins</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">

    <!-- Custom styles for this portfolio -->
    <link href="portfolio.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">diana</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="portfolio.html">Portfolio</a></li>
              <li><a href="resume.html">Resume</a></li>
              <li class="active"><a href="contact.html">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1 class="page-header">Thank You</h1>
        </div>
<?php

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
        echo "<div class=\"content-cont\">";
        for ($i = 0; $i < count($errors); $i++) {
            echo "<h3 class=\"h-3\">$errors[$i]</h3>";
        }
        echo "<h3 class=\"h-3\"><a href='../contact.html'>Back to Contact Form</a></h3></div>";
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
        echo "<div class=\"content-cont\">
            <h3 class=\"h-3\">Your message has been sent.</h3>
            <h3 class=\"h-3\"><?php echo $name ?></h3>
        </div>";
    }

?><?php

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
        echo "<div class=\"content-cont\">";
        for ($i = 0; $i < count($errors); $i++) {
            echo "<h3 class=\"h-3\">$errors[$i]</h3>";
        }
        echo "<h3 class=\"h-3\"><a href='../contact.html'>Back to Contact Form</a></h3></div>";
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
        echo "<div class=\"content-cont\">
            <h3 class=\"h-3\">Your message has been sent.</h3>
            <h3 class=\"h-3\"><?php echo $name ?></h3>
        </div>";
    }

?>
      </div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted credit">Created and authored by Diana Collins.</p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>

<?php
    }
?>