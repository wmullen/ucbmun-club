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
	<?php
	
	/*** begin the session ***/
	session_start();
	
	if(strcmp($_SESSION['username'], 'ucbmun') != 0)
	{
	    $message = 'You must be logged in to access this page';
	    header("location:login.php");
	} ?>
	
    <table> 
    	<th>
    	  <td> Exam </td>
    	  <td> Class </td>
    	  <td> Professor </td>
    	</th>
    	<tr>
    	  <td> Filler </td>
    	  <td> Filler </td>
    	  <td> Filler </td>
    	</tr>
   </table>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>