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
    
      <h2><center><font color="000000">Social Calendar</font></center></h2><br><br>
      <center>
        <iframe width = "660" height="880" src="https://docs.google.com/document/d/1H9etOZeYLf5SnsS-P7iTJwrMAEx5M4QtOjxDQgOu5EY/pub?embedded=true"></iframe>
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
