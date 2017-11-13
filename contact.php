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
    <form id="contactForm" action="contact-submitted.php" method="post" novalidate>
      <h3 id="form_header">Contact Form</h3>
      <div>
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="FirstName LastName" id="name" required/>
        <span class="error hidden" id="nameError">
          Please provide your name
        </span>
      </div>
      <div>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="name@domain.com" id="email" required/>
        <span class="error hidden" id="emailError">
          Please provide a valid email address
        </span>
      </div>
      <div>
        <label for="phoneNum">Phone Number:</label>
        <input type="tel" name="number" placeholder="1234567890" id="number" required/>
        <span class="error hidden" id="phoneError">
          Please provide a valid 10-digit phone number
        </span>
      </div>
      <div>
        <label for="subject">Subject:</label>
        <input type="text" name="subject" placeholder="The Subject" id="subject" required/>
        <span class="error hidden" id="subjectError">
          Please provide the subject of your enquiry
        </span>
      </div>
      <div>
        <label for="textBox">Message:</label>
        <textarea rows="8" cols="40" name="message" id="message" placeholder="Your Message" required></textarea>
        <span class="error hidden" id="messageError">
          Please provide a description of your enquiry
        </span>
      </div>
      <div class="button">
        <button type="submit" name="submit" id="submit-button">Submit</button>
      </div>
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
