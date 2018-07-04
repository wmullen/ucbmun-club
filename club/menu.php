 
 <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="pull-left logobar">
              <a href="index.php">&nbsp;&nbsp;<img class = "icon" src="http://www.ucbmun.org/img/brightlogo.png" /></a>
            </div>
            <a class="brand" href="index.php">  UCBMUN </a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="dropdown">    
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="who.php">Who We Are</a></li>
                    <li><a href="board.php">Officers Board</a></li>
                    <li><a href="faq.php">FAQs</a></li>
                    <li><a href="constitution.php">Club Constitution</a></li>
                  </ul>
                </li>
                <li><a href="application.php">Join Us</a></li>
                <li><a href="baymun.php">BayMUN</a></li>
                <li><a href="http://www.ucbmun.org/" target="_blank">UCBMUN XIX</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Members <b class="caret"></b></a>
                  <ul class="dropdown-menu">
            		  <?php
            		  if (!session_is_registered(username)) {
            			echo '<li><a href="login.php">Log In</a></li>';
            		   } else {
                  echo '<li><a href="updates.php">Announcements/Updates</a></li>';                    
            			echo '<li><a href="socialCalendar.php">Social Calendar</a></li>';
                  echo '<li><a href="travelCalendar.php">Travel & Training Calendar</a></li>';
                  echo '<li><a href="headDelGuide.php">Travel Guidebook </a></li>';
                  echo '<li><a href="logout.php">Log Out</a></li>';
            		   }
            		  ?>	
                  </ul>
                </li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="http://ucbmun.tumblr.com" target="_blank">Blog</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->
    <br /><br /><br />