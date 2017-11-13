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

  <div class="slide">
    <div class="image_container">
      <img id="img1" src="images/asianight.png" alt="Black Pink Performance">
    </div>

    <div id="button_container">
      <button class="slide_button" id="left" >Previous</button>
      <button class="slide_button" id="right" >Next</button>
    </div>
  </div>
  <hr/>
  <!-- Past performances in this order:
1) Kard-Oh NA NA ASIA NIGHT, 2) EXO- The Eve from MidAutumn Festival; 3) roduce 101- Never (you can use our cover or the A3WR performance);
4) Red Velvet- Rookie from Korea Night;  5) BTS- Not Today from showcase( you can use the normal or 1.5 speed version);
6) Seventeen- Mansae from Asia Night; 7) Gugudan- A Girl Like Me (cover version) -->

  <div class="vidcontainer">
    <div class="vid">
      <p> <span> Kard: Oh Na Na </span> <span class="event"> Cornell Asia Night </span> </p>
      <video controls>
        <source src="videos/ohnana_asia_night.webm" type="video/webm">
      </video>
    </div>

<!--
    <div class="vid">
      <p> <span> Exo: The Eve </span> <span class="event"> Cornell CSA MidAutumn Festival </span> </p>
      <video controls>
        <source src="videos/Mid_Autumn_Festival.webm" type="video/webm">
      </video>
    </div>
-->
    <div class="vid">
      <p> <span> Produce 101: Never </span> <span class="event"> Cover </span></p>
      <video controls>
        <source src="videos/koreaNight_2017.webm" type="video/webm">
      </video>
    </div>

<!--
    <div class="vid">
      <p> <span> Red Velvet: Rookie </span> <span class="event"> Cornell Korea Night 2017 </span> </p>
      <video controls>
        <source src="videos/produce101_never.webm" type="video/webm">
      </video>
    </div>

    <div class="vid">
      <p> <span> BTS: Not Today </span> <span class="event"> E. Motion Showcase 2017 </span></p>
      <video controls>
        <source src="videos/Music_Bank.webm" type="video/webm">
      </video>
    </div>

    <div class="vid">
      <p> <span>Seventeen: Mansae </span> <span class="event"> E. Motion Showcase 2017 </span> </p>
      <video controls>
        <source src="videos/17Mansae.webm" type="video/webm">
      </video>
    </div>

    <div class="vid">
      <p> <span> Gugudan: A Girl Like Me </span> <span class="event"> 1theK Dance Cover Contest </span> </p>
      <video controls>
        <source src="videos/girlLikeThis_Dance_Cover_Contest.webm" type="video/webm">
      </video>
    </div>
  -->
  </div>

</body>
</html>
