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

  <h2> Past Performances </h2> <br>


  <div class="slide">
    <div class="image_container">
      <img id="img1" src="images/asianight.png" alt="Black Pink Performance">
    </div> <br>

    <div id="button_container">
      <button class="slide_button" id="left" >Previous</button>
      <button class="slide_button" id="right" >Next</button>
    </div>

  </div> <br> <br>
  <!-- Past performances in this order:
1) Kard-Oh NA NA ASIA NIGHT, 2) EXO- The Eve from MidAutumn Festival; 3) roduce 101- Never (you can use our cover or the A3WR performance);
4) Red Velvet- Rookie from Korea Night;  5) BTS- Not Today from showcase( you can use the normal or 1.5 speed version);
6) Seventeen- Mansae from Asia Night; 7) Gugudan- A Girl Like Me (cover version) -->
  <div class="vidcontainer">
    <div class="vid">
      <h3> Kard: Oh Na Na </h3> <br>
      <strong> Cornell Asia Night </strong> <br>
      <iframe src="https://www.youtube.com/embed/Zj0FfQlr3_g" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="vid">
      <h3> Exo: The Eve </h3> <br>
      <strong> Cornell CSA MidAutumn Festival </strong> <br>
      <iframe  src="https://www.youtube.com/embed/WgMUMZblN34" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="vid">
      <h3>Produce 101: Never </h3> <br>
      <strong> Cover </strong> <br>
      <iframe src="https://www.youtube.com/embed/_vR1OPcH7Sc" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="vid">
      <h3> Red Velvet: Rookie </h3> <br>
      <strong> Cornell Korea Night 2017 </strong> <br>
      <iframe src="https://www.youtube.com/embed/mql-B4rvRKA" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="vid">
      <h3> BTS: Not Today </h3> <br>
      <strong> E. Motion Showcase 2017 </strong> <br>
      <iframe src="https://www.youtube.com/embed/E731X5NPCJw" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="vid">
      <h3> Seventeen: Mansae </h3> <br>
      <strong> E. Motion Showcase 2017 </strong> <br>
      <iframe  src="https://www.youtube.com/embed/ZGwLxXsOgPg" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="vid">
      <h3> Gugudan: A Girl Like Me </h3> <br>
      <strong> 1theK Dance Cover Contest </strong> <br>
      <iframe src="https://www.youtube.com/embed/P87-VueVfEA" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  <!--width="560" height="315"  -->

</body>
</html>
