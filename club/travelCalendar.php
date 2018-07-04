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
    
      <h2><center><font color="000000">Travel and Training Calendar</font></center></h2><br><br>
      <center>
        <iframe src="https://www.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=qqd6gmsbno00h74aggh9qffdv8%40group.calendar.google.com&amp;color=%23875509&amp;ctz=America%2FLos_Angeles" style=" border:solid 1px #777 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
      </center>
      </div>
    </div>

    </div>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
