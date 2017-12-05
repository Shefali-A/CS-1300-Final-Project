<?php
session_start();

$name = $_SESSION['name'];
$email = $_SESSION['email'];
unset($_SESSION['email']);
$number = $_SESSION['number'];
unset($_SESSION['number']);
$enquiry = $_SESSION['subject'];
$message = $_SESSION['message'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>E. Motion</title>
  <link rel="stylesheet" type="text/css" href="styles/desktop.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/mobile.css" media="screen"/>
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/site.js" type="text/javascript"></script>
</head>
<body>
  <header>
  <div id="header">

    <div id="logo">
      <img alt = "logo" src = "images/logo.png"/>
    </div>

    <div id="teamName">
      <h1>E. Motion</h1>
    </div>
  </div>

  <?php
    include "includes/navigation.php";
  ?>
  </header>

  <!-- All the photos and videos on this page were provided by Tiffany Chan,
       president of the E. Motion team-->
  <article>
    <h2>Contact Us</h2>
    <form id="contactForm" action="contact-submitted.php" method="post" novalidate>
      <h3 id="form_header">Contact Form</h3>
      <p>Thank you, <?php echo(htmlspecialchars($name)); ?>.</p>
      <p>You have successfully submitted the form. You will either receive a call
        at <?php echo(htmlspecialchars($number)); ?> or an email from us
        at <?php echo(htmlspecialchars($email)) ?> concerning the subject of
        your enquiry '<?php echo(htmlspecialchars($enquiry)); ?>'.</p>
      <p>The details of your enquiry are: '<?php echo(htmlspecialchars($message)); ?>'.</p>
      <p>We will respond within 24 hours of the form being submitted.</p>
    </form>
    <div id="contacts">
      <h3 id="con_info_header">Contact Information</h3>
      <p>Follow us on <a href="https://www.facebook.com/cornellemotion/">Facebook</a>, check out our previous performances on
        <a href="https://www.youtube.com/user/cornellemotion/">YouTube</a> at E.Motion Cornell, and contact us at
        cornellemotion@gmail.com to be added to our listserv!</p>
        <div id="contactImage">
          <img src="images/team_picture_2.jpg" alt="E.Motion group picture"/>
        </div>
    </div>
  </article>
</body>
</html>
