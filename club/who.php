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
    <?php include('sidebar.php'); ?>
    
      <h2><center><font color="000000">Who We Are</font></center></h2><br><br>
      <div class="span8 offset1 well primaryWell">
        <font color="000000">
          <div style="text-align:justify">
            <p>
              Model United Nations, fondly referred to as MUN, 
              is a simulation of the United Nations that aims 
              to educate participants about current events, 
              topics in international relations, diplomacy, and 
              the United Nations agenda. Students act as delegates 
              representing a country, NGO, or historical figure as 
              they work to solve international issues through a 
              combination of debate and negotiation. Students are 
              able to improve upon their public speaking, creative 
              problem solving, and interpersonal skills while 
              learning about a wide range of historical and current foreign affairs. 
            </p>
            <br />
            <p>
              Our members compete on the national circuit, attending up 
              to nine conferences annually and traveling to universities 
              as close as UCLA and as far as Harvard. Along with competing, 
              members host the UCBMUN conference, held the first week of March 
              every year in San Francisco for more than 500 students from across the 
              country. The conference provides wonderful leadership opportunities 
              for our members and a chance to pursue individual interests in foreign 
              affairs. Berkeley’s Model UN is truly an international organization, with 
              students from a wide range of countries and a geographically diverse 
              representation of US citizens. Our members also come from a variety of 
              academic backgrounds, including History, Economics, EECS, Haas Business, Nuclear 
              Engineering, and Public Health. In all, our club offers members a unique opportunity 
              to understand international affairs and grow intellectually while providing life-long friendships.
            </p>        
      	</div>


      </div>
      </div>
      <div class = "row-fluid">
      	<div class = "span4">
      		<img class="whoWeAreImage img-rounded" src="img/who_we_are/1.jpg"/>
      		<img class="whoWeAreImage img-rounded" src="img/who_we_are/4.jpg"/>
      		<img class="whoWeAreImage img-rounded" src="img/who_we_are/7.jpg"/> 
      	</div>
      	<div class = "span4">
      		<img class="whoWeAreImage img-rounded" src="img/who_we_are/2.jpg"/>
      		<img class="whoWeAreImage img-rounded" src="img/who_we_are/5.jpg"/>
      		<img class="whoWeAreImage img-rounded" src="img/who_we_are/8.jpg"/> 
      	</div>
      	<div class = "span4">
      		<img class="whoWeAreImage img-rounded" src="img/who_we_are/3.jpg"/>
      		<img class="whoWeAreImage img-rounded" src="img/who_we_are/6.jpg"/>
      		<img class="whoWeAreImage img-rounded" src="img/who_we_are/9.jpg"/> 
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