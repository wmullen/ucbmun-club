 <?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=big5">
    
    <title>UCBMUN &middot; Club</title>
    <?php include("head.php"); ?>     
  </head>

  <body>

    <?php include("menu.php"); ?> 
    <div class="container-fluid">
      <div class = "row-fluid">
    <?php include('sidebar.php'); ?>
      <h2><center><font color="000000">Contact Us</font></center></h2><br><br>
      <div class="span8 offset1 well primaryWell">
        <font color="000000">
          <ul>
            <li>For general club-related matters, please contact our President - <a href="mailto:rajitkinra@berkeley.edu">
              <font color="22316C">
                <b>Rajit Kinra</b>
              </font></a>
            </li>
            <br>
            <li>For matters concerning the travel team, please contact our Head Delegates - <a href="mailto:gdimick@berkeley.edu"><font color="22316C"><b>Grayson Dimick</b></font></a> and  <a href="mailto:nwblack@berkeley.edu"><font color="22316C"><b>Nathan Black</b></font></a> .</li><br>
            <li>For matters concerning outreach, club events, on-campus involvement, and alumni, contact our Vice President - <a href="mailto:lgaldon@berkeley.edu"><font color="22316C"><b>Lorenzo Gald車n Ramos</b></font></a>.</li><br>
            <li>For matters concerning sponsorship or affiliations, please contact our Treasurer - <a href="mailto:ifarooqui@berkeley.edu"><font color="22316C"><b>Ish Farooqui</b></font></a>.</li><br>
            <li>For matters concerning recruitment, please contact our Secretary - <a href="mailto:wendie@berkeley.edu"><font color="22316C"><b>Wendie Yeung</b></font></a>.</li><br>
            <li>For conference-related matters, please contact our Secretary-General - <a href="mailto:sg@ucbmun.org"><font color="22316C"><b>Varsha Venkatasubramanian</b></font></a> - or Deputy Secretary-General - <a href="mailto:dsg@ucbmun.org"><font color="22316C"><b>Raymond King</b></font></a>.</li>
          </ul>
        </font>
      </div>
      <div class="span4 offset4">
      <?php
              if (session_is_registered(username)) {
                echo '
                <center>
                <table class="table table-bordered table-hover table-condensed">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Phone Number</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Divit Sood</td>
                      <td>510-882-0582</td>
                    </tr>
                    <tr>
                      <td>Anton Wideroth</td>
                      <td>510-590-2276</td>
                    </tr>
                    <tr>
                      <td>Apratim Vidyarthi</td>
                      <td>408-826-1932</td>
                    </tr>
                    <tr>
                      <td>Wendie Yeung</td>
                      <td>425-736-5381</td>
                    </tr>
                    <tr>
                      <td>Grayson Dimick</td>
                      <td>707-623-7166</td>
                    </tr>
                    <tr>
                      <td>Lorenzo Gald車n Ramos</td>
                      <td>925-639-1912</td>
                    </tr>
                    <tr>
                      <td>Akash Sharma</td>
                      <td>917-704-9970</td>
                    </tr>
                    <tr>
                      <td>Rajit Kinra</td>
                      <td>510-931-0720</td>
                    </tr>                                                                                                    
                  </tbody>
                </table>
                </center>
                ';
              }
          ?>
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