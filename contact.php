<?php

session_start();

$submit = $_REQUEST["submit"];

$HIDDEN_ERROR_CLASS = "hidden";

if (isset($submit)) {
  $name = $_REQUEST["name"];
  if ( !empty($name) ) {
    $nameValid = true;
  } else {
    $nameValid = false;
  }

  $email = $_REQUEST["email"];
  if ( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailValid = true;
  } else {
    $emailValid = false;
  }

  $number = $_REQUEST["number"];
  if ( !empty($number) && filter_var($number, FILTER_VALIDATE_INT,
  array("options" => array("min_range"=>1000000000, "max_range"=>9999999999)))) {
    $numberValid = true;
  } else {
    $numberValid = false;
  }

  $subject = $_REQUEST["subject"];
  if (!empty($subject)) {
    $subjectValid = true;
  } else {
    $subjectValid = false;
  }

  $message = $_REQUEST["message"];
  if (!empty($message)) {
    $messageValid = true;
  } else {
    $messageValid = false;
  }

  $formValid = $nameValid && $emailValid && $numberValid && $subjectValid && $messageValid;
  if ($formValid) {
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['number'] = $number;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    header("Location: contact-submitted.php");
    return;
  }
} else {
  $nameValid = true;
  $emailValid = true;
  $numberValid = true;
  $subjectValid = true;
  $messageValid = true;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>E. Motion</title>
  <link rel="stylesheet" type="text/css" href="styles/desktop.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/mobile.css" media="screen"/>
  <script src="scripts/jquery-3.2.1.js" type="text/javascript"></script>
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
  <article>
    <h2>Contact Us</h2>
    <form id="contactForm" action="contact.php" method="post" novalidate>
      <h3 id="form_header">Contact Form</h3>
      <div>
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="FirstName LastName" id="name"
          value="<?php echo(htmlspecialchars($name));?>" required/>
        <br/>
        <span class="error <?php if ($nameValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="nameError">
          Please provide your name
        </span>
      </div>
      <div>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="name@domain.com" id="email"
          value="<?php echo(htmlspecialchars($email));?>" required/>
        <br/>
        <span class="error <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="emailError">
          Please provide a valid email address
        </span>
      </div>
      <div>
        <label for="number">Phone Number:</label>
        <input type="tel" name="number" placeholder="1234567890" id="number"
          value="<?php echo(htmlspecialchars($number));?>" required
        minlength="10" maxlength="10"/>
        <br/>
        <span class="error <?php if ($numberValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="phoneError">
          Please provide a valid 10-digit phone number
        </span>
      </div>
      <div>
        <label for="subject">Subject:</label>
        <input type="text" name="subject" placeholder="The Subject" id="subject"
          value="<?php echo(htmlspecialchars($subject));?>" required/>
        <br/>
        <span class="error <?php if ($subjectValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="subjectError">
          Please provide the subject of your enquiry
        </span>
      </div>
      <div>
        <label for="message">Message:</label>
        <textarea name="message" id="message" placeholder="Your Message"
          required><?php echo(htmlspecialchars($message));?></textarea>
        <br/>
        <span class="error <?php if ($messageValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="messageError">
          Please provide a description of your enquiry
        </span>
      </div>
      <div class="button">
        <button type="submit" name="submit" id="submit-button">Submit</button>
      </div>
      <p>We will respond within 24 hours of the form being submitted.</p>
    </form>
    <div id="contacts">
      <h3 id="con_info_header">Contact Information</h3>
      <p>Follow us on <a href="https://www.facebook.com/cornellemotion/">Facebook</a>, check out our previous performances on
        <a href="https://www.youtube.com/user/cornellemotion/">YouTube</a> at E.Motion Cornell, and contact us at
        cornellemotion@gmail.com to be added to our listserv! <strong>Remember we don't have tryouts so anyone is
        welcome to join us!</strong></p>
        <div id="contactImage">
          <img src="images/team_picture_2.jpg" alt="E.Motion group picture"/>
        </div>
      </div>
    </article>
  </body>
  </html>
