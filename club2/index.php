<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <title>UCBMUN</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link rel="stylesheet" href="stylesheets/foundation.css">
  <script src="javascripts/modernizr.foundation.js"></script>

  <style>
    body{
      background: url('img/ticks.png');
    }
    .sidebarPanel {
      background: #274257;
    }
    .sglist {
      font-size: 20px;
      color: #bda400;
    }
    .notification {
      color: #e5e5ff;
    }

    .orbit-wrapper .orbit-caption .h3 {
      color: #ffffff;
    }
  </style>
</head>

<body> 
  <?php include("menu.php"); ?> 

  <div class="three columns">
    <!-- SIDEBAR -->
    <div class = "panel sidebarPanel">
      <h4 class="notification"> UN Secretary-Generals</h4>
      <div>
        <p class="sglist"> Ban Ki-Moon </p>
        <p class="sglist"> Kofi Annan </p>
        <p class="sglist"> Boutros Boutros-Ghali </p>
        <p class="sglist"> Javier Perex de Cueliar </p>
        <p class="sglist"> Kurt Waldheim </p>
        <p class="sglist"> U Thant </p>
        <p class="sglist"> Dag Hammarskjold </p>
        <p class="sglist"> Trygve Lie </p>
      </div>
    </div>
  </div>

  <div class="nine columns">
    <!-- CAROUSEL -->
    <!-- NOTE: Keep all the images the same height so that the caption stay visible-->
    <div id="featured">
      <img src="img/skyline.jpg" alt="slide image" data-caption="#captionOne"/>
      <!--<img src="img/SFNight.jpg" alt="slide image" data-caption="#captionTwo"/>
      <img src="img/skyline.jpg" alt="slide image" data-caption="#captionThree"/>
      -->
    </div>

    <span class="orbit-caption" id="captionOne">
      <div>
        <h3> 
          Who we are 
        </h3>
        We are an organization focused on international diplomacy
      </div>
    </span>
    <span class="orbit-caption" id="captionTwo">Here is a caption2...</span>
    <span class="orbit-caption" id="captionThree">Here is a caption3...</span>
  </div>


  <!-- JAVASCRIPT SUPPORT -->

  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>

  
    <script>
    $(window).load(function(){
      $("#featured").orbit();
    });
    </script> 
</body>
