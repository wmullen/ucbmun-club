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
    
      <h2><center><font color="black">Frequently Asked Questions</font></center></h2><br><br>
      <div class="span8 offset1 well primaryWell">
        <font color="black"><div style="text-align:justify">
        <p>
          Q: What is the time commitment? <br />
          A: UCBMUN meets weekly, usually on Tuesdays from 8-9. 
          Besides these weekly meetings all members are required 
          to either attend one away conference or BayMUN. In addition 
          there are training sessions which help members learn the 
          ins-and-out of Model UN debate (these are not mandatory 
          unless you are looking to travel, then a certain amount need to be completed). 
          The most important commitment is a members ability to partake 
          in our annual, four-day long Conference we hold every year in San Francisco, 
          UCBMUNC. All members work on various committee or logistical aspects and are 
          required to attend committee meetings in the weeks leading up to the Conference 
          in order to ensure its success. On average, the typical UCBMUN member will commit 
          1-4 hours a week during the Fall and 2-6 during the first half of the Spring 
          until the conference is over, after which the commitment goes back down to 1-4.<br />
        </p>
        <hr />
        <p>
          Q: What is BayMUN?<br />
          A: BayMUN is a local Bay Area Conference which UCBMUN hosts every semester on campus. 
          BayMUN serves as a training ground for our staff for UCBMUNC as well as for our members 
          who cannot afford to travel, thus providing an opportunity to still compete. <br />
        </p>
        <hr />
        <p>
          Q: Does UCBMUNC cost money?<br />
          A: Hotel costs are fully covered for our members, however traveling over by BART and food is not included.<br />
        </p>
        <hr />
        <p>
          Q: Where does UCBMUN compete?<br />
          A: Our club usually travels to eight away conferences a year. This year we will attend: Columbia, Georgetown, USC, UPenn, Harvard, UChicago, and UCLA.<br />
        </p>
        <hr />
        <p>
          Q: Is travel subsidized?<br />
          A: Travel is not fully subsidized. However, we do partially subsidize members for certain selected conferences. <br />
        </p>
        <hr />
        <p>
          Q: How do I join?<br />
          A: We accept members both in the Fall and Spring, Stay tuned for more details. 
          As always you can always <a href="contact.php"> contact </a> us for more information! <br />          
        </p>
        <hr />
        <p>
          Q: Do I have to a be freshman to join?<br />
          A: No. We accept people from all years, even people going into their 4th year and even grad students (the guy maintaining this site!).<br />
        </p>
        <hr />
        <p>
          Q: Do I have to be a Social Science major?<br />
          A: No. If you are interested in debate or international relations 
          then Model UN is a good place for you. Our members come from diverse 
          range of backgrounds and our ranks host majors such as: EECS, Computer Science, 
          Nuclear Engineering, and MCB along with the more traditional: PACS, Political Economy, History, and Political Science backgrounds. <br />
        </p>
      </div>
    </font>
      </div>


      </div>
    </div>
    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.carousel').carousel();
      });
    </script>
  </body>
</html>