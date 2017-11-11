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
    <p>Feel free to ask us anything about our team.</p>
    <form>
      <label for="name">Name:</label>
      <input type="text" name="name" placeholder="Your Name" id="name" required/>
      <label for="email">Email:</label>
      <input type="email" name="email" placeholder="Your Email" id="email" required/>
      <label for="phoneNum">Phone Number:</label>
      <input type="text" name="phoneNum" placeholder="Your Phone #" id="phoneNum" required/>
      <label for="subject">Subject:</label>
      <input type="text" name="subject" placeholder="The Subject" id="subject" required/>
      <label for="textBox">Message:</label>
      <textarea rows="5" cols="40" name="textBox" id="textBox" placeholder="Your Message"></textarea>
      <button type="submit" name="submit" id="submit">Submit</button>
    </form>
    <div>
      <h5>Address</h5>
      <p>Something, Something, Something...</p>
      <h5>Phone Number</h5>
      <p>Something, Something, Something...</p>
      <h5>Email</h5>
      <p>Something, Something, Something...</p>
      <h5>Social Media Links</h5>
      <p>Something, Something, Something...</p>
    </div>
  </article>
</body>
</html>
