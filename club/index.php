<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UCBMUN &middot; Club</title>
    <?php include("head.php"); ?> 
  </head>

  <body>
    <?php include("menu.php"); ?>   
    <div class="container-fluid">
      <div class = "row-fluid">
        <?php include("sidebar.php"); ?> 
    <!-- Carousel
    ================================================== -->
        <div class="span10">
            <div id="myCarousel" class="carousel slide">
              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/gaHall.jpg" class="img-rounded" alt="">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>Travel. Debate. Network.</h1>
                      <p class="lead">With UCBMUN, you will visit 8 new cities and meet hundreds of college students with similar interests.</p>
                      <!--<a class="btn btn-large btn-primary" href="#">?</a>-->
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="img/10.jpg" class="img-rounded" alt="">
                </div>
                <div class="item">
                  <img src="img/doe.jpg" class="img-rounded" alt="">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>MUN is a family.</h1>
                      <p class="lead"> With powerful alumni within most industries, giving you connections for life!</p>
                      <a class="btn btn-large btn-primary" href="who.php">Learn more</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="img/11.jpg" class="img-rounded" alt="">
                </div>
                <div class="item">
                  <img src="img/roundtable.jpg" class="img-rounded" alt="">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>The closest thing to the UN.</h1>
                      <p class="lead">24 nationalities. 33 languages. 38 majors. 106 members. Unlimited exposure.</p>
                      <!--<a class="btn btn-large btn-primary" href="#">Browse gallery</a>-->
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img src="img/12.jpg" class="img-rounded" alt="">
                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div><!-- /.carousel -->
        </div>
      </div>
    </div>
    </div>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.carousel').carousel();
      });
    </script>
  </body>
</html>