<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>E. Motion</title>
  <link rel="stylesheet" type="text/css" href="styles/desktop.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="styles/mobile.css" media="screen"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <script src="scripts/slideshow.js" type="text/javascript"></script>

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
  <br>

  <h2> Past Performances </h2>
  <!-- All the photos and videos on this page were provided by Tiffany Chan,
       president of the E. Motion team-->
  <div class="vidcontainer">
    <div class="vid">
      <p> <span> Kard: Oh Na Na </span> <span class="event"> Cornell Asia Night </span> </p>
      <video controls>
        <source src="videos/ohnana_asia_night.webm" type="video/webm">
      </video>
    </div>

    <div class="vid">
      <p> <span> Produce 101: Never </span> <span class="event"> Cover </span></p>
      <video controls>
        <source src="videos/koreaNight_2017.webm" type="video/webm">
      </video>
    </div>
  </div>
  <p> For more videos of our previous performances, check out our
    <a href="https://www.youtube.com/user/cornellemotion/">YouTube</a> channel!
  </p>
  <hr/>

  <div class="slide">
    <div class="image_container">
      <img id="img1" src="images/asianight.png" alt="Black Pink Performance">
    </div>

    <div id="button_container">
      <button class="slide_button" id="left" >Previous</button>
      <button class="slide_button" id="right" >Next</button>
    </div>
  </div>

</body>
</html>
