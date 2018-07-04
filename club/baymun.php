 <?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UCBMUN &middot; Club</title>
    <?php include("head.php"); ?> 
    <style>
	table {
		
		width:100%;
	}
	td, th{
		text-align:justify;
	}
	</style>
  </head>

  <body>

    <?php include("menu.php"); ?> 
    <div class="container-fluid">
      <div class = "row-fluid">
    <?php include('sidebar.php'); ?>
    
      <h2><center><font color="000000">UC Berkeley Fall BayMUN<br>November 22, 2015</font></center></h2><br><br>
      <div class="span8 offset1 well primaryWell">
        <font color="222222">
          <div style="text-align:justify">
            <p>BayMUN is a local Bay Area conference which UC Berkeley's Model UN club hosts every semester on campus. We invite colleges from around the Bay Area to attend BayMUN which opens up many opportunities for our members and members of local university MUN programs. This year's fall BayMUN will see a host of exciting committee topics for one day of heated and enthusiastic debate. Please see more details below!</p>
            <p>
              <b> Secretary-General:</b> Patrick Babajanian (<a href="patrickbabajanian@berkeley.edu" class="link" >patrickbabajanian@berkeley.edu</a>)<br/>
              <b> Deputy Secretary-General:</b> Yash Sanghrajka(<a href="mailto: yashcal@berkeley.edu" class="link" > yashcal@berkeley.edu</a>)<br/>
              <b> Background Guides Released:</b> November 16, 2015<br/><br/>
            </p>  
            <hr/>          
            <div><span style="text-align:center;"><h4>Background Guides</h4><h5>Background guides can be found below for each of our five committees. If you have any questions, please do not hesitate to reach out to your Head Chair.</h5><span>
	    	  <table>
	    	  
	    	  
	    	  	<tr><th>Committee</th><th>Background Guide Link</th><th>Chair</th><th>Email</th><th>Crisis Director/Chair</th><th>Email</th></tr>
	    	  	<tr><td>SOCHUM: The Human Rights Implications of Sharia Law</td><td><a href="bgs/SOCHUM-BG-BayMUN-Fall-2015.pdf" download="SOCHUM.pdf" style="color:steelblue">SOCHUM BG</a></td><td>Mounika Yepuri</td><td><a href="mailto:myepuri@berkeley.edu" class="link" >myepuri@berkeley.edu</a></td><td>Christopher Eric Lomax</td><td><a href="mailto:chrisericlomax@berkeley.edu" class="link" >chrisericlomax@berkeley.edu</a></td></tr>
	    	  	<tr><td>DISEC: Curbing Terrorism in South Asia</td><td><a href="bgs/DISEC-BG-BayMUN-Fall-2015.pdf" download="DISEC.pdf" style="color:steelblue">DISEC BG</a></td><td>Muhammad Hassan Ayub</td><td><a href="mailto:hassanayub@berkeley.edu" class="link" >hassanayub@berkeley.edu/a></td></tr>
	    	  	<tr><td>Batman: The Rebuilding of Gotham City</td><td><a href="bgs/Batman-BG-BayMUN-Fall-2015.pdf" download="Batman.pdf" style="color:steelblue">Gotham BG</a></td><td>Beckett Kelly</td><td><a href="mailto:bbkelly@berkeley.edu" class="link" >bbkelly@berkeley.edu</a></td><td>Varsha Venkatasubramanian</td><td><a href="mailto:varshanet@gmail.com" class="link" >varshanet@gmail.com</a></td></tr>
	    	  	<tr><td>Arab League: ISIS, Yemen, and the Middle East</td><td><a href="bgs/Arab-League-BG-BayMUN-Fall-2015.pdf" download="Arab_League.pdf" style="color:steelblue">Arab League BG BG</a></td><td>Or-el Vaknin</td><td><a href="mailto:tayaravaknin@berkeley.edu" class="link" >tayaravaknin@berkeley.edu</a></td><td>Kristine Kousherian</td><td><a href="mailto:kousherian.k1@berkeley.edu" class="link" >kousherian.k1@berkeley.edu</a></td></tr>
	    	  	<tr><td>Chile: The Cabinet of Augusto Pinochet</td><td><a href="bgs/Pinochet-BG-BayMUN-Fall-2015-FINAL.pdf" download="Pinochet.pdf" style="color:steelblue">Pinochet BG</a></td><td>Lorenzo Galdon Ramos</td><td><a href="mailto:lgaldon@berkeley.edu" class="link" >lgaldon@berkeley.edu</a></td><td>Grayson Dimick</td><td><a href="mailto:gdimick@berkeley.edu" class="link" >gdimick@berkeley.edu</a></td></tr>		    	  	
	    	  </table>
	    	  </div>	    	  	    
            <hr/>
            <div style="width:50%;margin:0 auto;"><span style="text-align:center;"><h4>Schedule</h4><span>
	    	  <table>
	    	  	<tr><th>What?</th><th>When?</th></tr>
	    	  	<tr><td>Registration and Free Breakfast</td><td>09:15 – 10:00</td></tr>
	    	  	<tr><td>Opening Ceremony</td><td>10:00 – 10:15</td></tr>
	    	  	<tr><td>First Committee Session</td><td>10:15 – 01:15</td></tr>
	    	  	<tr><td>Lunch Break</td><td>01:15 – 02:15</td></tr>
	    	  	<tr><td>Second Committee Session</td><td>02:15 – 05:15</td></tr>
	    	  	<tr><td>Closing Ceremony and Awards</td><td>05:30 – 05:45</td></tr>

	    	  </table>
	    	  </div>	  
	    	  <br/> 	    	  	    	  
	    	 	  
	   <hr/>
            <center><h3> Welcome Letter </h2></center>                   
        <center>
	        <object data="bgs/BayMUN-Fall-2015-Welcome-Letter-Update.pdf" type="application/pdf" width="810" height="1090">
	          <p> Prospectus<a href="prospectus.pdf"></a></p>
	        </object>
    	</center>
    	<hr/>	    	
     
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