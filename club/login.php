
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

    <!-- Password
    ================================================== -->
      
      <h2><center><font color="black">Members Login</font></center></h2>
      <br><br>
      <div class="span10"><b><font color="black"><center>
        <p>Please enter password to access information for members:</p>
	<form method="post" action="loginCheck.php">
        <input type="password" id="inputPassword" name="mypassword" onkeydown="if (event.keyCode == 13) document.getElementById('submitBtn').click()">
        <button type="submit" class="btn" id="submitBtn">Submit</button>
	</form>
      </center>
      </b></font>
      </div>
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
