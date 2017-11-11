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
  <article>
    <h2>Contact Us!!!</h2>
    <form>
      <h3 id="form_header">Contact Form</h3>
      <div>
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Your Name" id="name" required/>
      </div>
      <div>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Your Email" id="email" required/>
      </div>
      <div>
        <label for="phoneNum">Phone Number:</label>
        <input type="text" name="phoneNum" placeholder="Your Phone #" id="phoneNum" required/>
      </div>
      <div>
        <label for="subject">Subject:</label>
        <input type="text" name="subject" placeholder="The Subject" id="subject" required/>
      </div>
      <div>
        <label for="textBox">Message:</label>
        <textarea rows="8" cols="40" name="textBox" id="textBox" placeholder="Your Message"></textarea>
      </div>
      <button type="submit" name="submit" id="submit">Submit</button>
    </form>
    <div id="contacts">
      <h3 id="con_info_header">Contact Information</h3>
      <h5>Address</h5>
      <p>Something, Something, Something...</p>
      <h5>Phone Number</h5>
      <p>Something, Something, Something...</p>
      <h5>Email</h5>
      <p>Something, Something, Something...</p>
      <h5>Social Media Links</h5>
      <p>Something, Something, Something...</p>
      <figure id="contact_photo">
        <p>Photo Here</p>
      </figure>
    </div>
  </article>
</body>
</html>
