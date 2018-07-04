<?php
session_start();
if(!session_is_registered(username)){
  header("location: login.php");
}
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
    
      <center>
        <h2>
          <font color="black">Announcements/Updates</font>
        </h2>
        <h5>
          <font color="black">Check here often!</font>
        </h5>
      </center>
      <br><br>
      <div class="span8 offset1 well primaryWell">
        <font color="black"><div style="text-align:justify">
        <h4> UCBMUN Anonymous Feedback Form </h4>
        <h6>Posted: November 5 </h6>
        <p> 
          We are more than halfway through the semester. Let us know any feedback you have - in what ways we can improve and what not.
          We will incorporate any feedback going forward. <br />
          Here is the <a target="_blank" class="link" href="https://docs.google.com/forms/d/1fymfshuIhUeT-ijDAOd9mZstw5DY6i3UbxJu_hOppsI/viewform">feedback form</a>.
        </p><br />
        <hr />
        <h4> Co-Social Chair Application </h4>
        <h6>Posted: October 1 </h6>
        <p> 
          Want to hang out with Lynn, help plan events and make sure everyone is having a great time in UCBMUN? Apply to be a Social Chair along with Lynn Yu!
          Applications are due next Tuesday (October 8)! If you are at all interested, apply! <br />
          <a target="_blank" class="link" href="https://docs.google.com/forms/d/1xgUgE8gb45RbKqzhgIwoGdShS4mD_wBQBKuXZ9I6z-g/viewform">Social Chair Application</a>.
        </p>
        <hr />
        <h4> SBIMUN Sign Up Sheet </h4>
        <h6>Posted: October 1 </h6>
        <p> If you are interested in attending Santa Barbara Model UN Conference, sign up below. It is one of the two West Coast conferences
          we attend and a great way to get MUN experience, especially if you haven't done MUN before. The total cost should be below $200. 
          <br />
          Please note: Putting your name on the form is binding - as in you are going. <br />
          First deposit for SBIMUN is $120, due this Friday (10/4). <br />
          <a target="_blank" class="link" href="https://docs.google.com/a/berkeley.edu/spreadsheet/ccc?key=0AhbjhuNQe-uOdHFBalRhcm5MS0xjTWFTdmlVOXdueFE#gid=0">SBIMUN Sign Up Sheet</a>.
        </p>
        <hr />                  
        <h4> Club Demographic Form </h4>
        <h6>Posted: September 13 </h6>
        <p> In the interest of knowing a bit more about the makeup of the club - in order to attract sponsors and future members -
          please fill out this short <a target="_blank" class="link" href="https://docs.google.com/forms/d/1cJbjH8BmOKm7r3DZtzFANOkS8qMyo_ryc3CFIJNTZ3o/viewform">survey</a>. The information will be used mostly as a marketing tool as well as a way
          to streamline the logistics for planning away conferences. Thanks!
        </p>
        <hr />          
        <h4> UPMUNC Sign up Sheet </h4>
        <h6>Posted: September 13 </h6>
        <p> All those interested in UPMUNC, <a target="_blank" class="link" href="https://docs.google.com/a/berkeley.edu/spreadsheet/ccc?key=0AhbjhuNQe-uOdGdwYk41VktmQ1NUb2tsUC01XzBfZlE#gid=0">here</a> is the interest sheet form. 
          This helps us gauge costs and make an initial sign up. 
          If you're even remotely interested in going to Penn, please put your name down. 
          It's not binding, it's just so that we can send you more information.
        </p>
        <hr />
        <h4> MUN Expertise Form </h4>
        <h6>Posted: September 13 </h6>
        <p> If you are interested being listed in the Head Del Guide - a short guide on tips and how-to's for away conferences -
          as a person of expertise for a certain topic, please fill out <a target="_blank" class="link"  href="https://docs.google.com/forms/d/1J2vJKt2RGu3GtHdlKaXs4fwOw1WRJoMc7CjxLxzM6hg/viewform">this</a> form. The topic can be anything from a region of the world
          to a certain Model UN aspect and everything in between. More the merrier! 
        </p>
        <hr />
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
