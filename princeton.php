<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head><title>GRE CONSULTANCY</title>
		<link rel="stylesheet2" type="text/css" href="stylesheet.css"></link>
		<link href="css/bootstrap.min.css" rel="stylesheet"></link>
		<script src="js/jquery-1.12.4.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		   <style>
      .back
      {
      	 background-image: url("princeton_univ_college.jpg"); 
      	 background-attachment: fixed;
      }
     </style>
	</head>
	<!-- beginning of page-->
	<body class="back">
		<div class="container">
		<nav class="navbar navbar-inverse">
		<div class = "container-fluid">
	    <div class = "row" id="wrapper">
			<div class ="col-xs-12" style="background-color:#637E99; color:white;">
	    	<div id="header">
				<header>
					<center>
					<h1><u><font face ="Times new roman"><b>GRE CONSULTANCY</font></b></u>
						<img src="logo.png" align=left></img>
					</h1>
					</center>
				</header>
			</div>
			</div>
		</div>
		<div class = "row" id = "content">
	    	<div class = "col-xs-12">
				<h3>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#grenavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="grenavbar">
					<ul class="nav navbar-nav">
						<li class="center_align"><a class = "active" href="index.php">Home</a></li>
						<li class= "active dropdown center_align" >
							<a class="dropdown-toggle" data-toggle="dropdown" href = "#info">Information
								<span class= "caret"></span></a>
								<ul class = "dropdown-menu">
									<li><a href= "university.php">Top colleges</a></li>
									<li><a href = "courses.php">Top courses</a></li>
								</ul>
						</li>
						<li class="center_align"><a href="search.php">Search</a></li>
						<li class="center_align"><a href="contact_us.php">Contact Us</a></li>
						<li class="center_align"><a href="about.php">About</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<!-- <li><a href= "form.html"><span class="glyphicon glyphicon-user"></span>Sign up</a></li> -->
						<?php
                        	if (isset($_SESSION ['sid']))
							{
								$username = $_SESSION['login_user'];
                        		echo ("");
							}
							else
							{	
                        		echo ("<li><a href= \"form.html\"><span class=\"glyphicon glyphicon-user\"></span>Sign up</a></li>");
                            }
                         ?>
                        <?php
                        	if (isset($_SESSION ['sid']))
							{
								$username = $_SESSION['login_user'];
                        		echo ("<li><a href= \"logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span>&nbsp".$username."</a></a></li>");
							}
							else
							{	
                        		echo ("<li><a href= \"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span>Login</a></a></li>");
                            }
                         ?>       
					</ul>
					</div>
				</h3>
			</div>
		</div>
		</div>
		</nav>
		</div>
		<div class = "container">
        <div class = "col-xs-12" style="background-color:white; opacity: 0.85; filter: alpha(opacity=80); ">
		<p>
			<h2><font face="Times New Roman"><a href="https://www.princeton.edu/main" target = "_blank">Princeton university 			<a href="harward.php"><img src="right.png" align="right" hspace="20"></a><a href="alberta.php"><img src="left.png" align="right" ></a></h2>
		</p>
		<p align = justify>
			<h4>Princeton University is a private Ivy League research university in Princeton, New Jersey, United States. Founded in 1746 in Elizabeth as the College of New Jersey, Princeton was the fourth chartered institution of higher education in the Thirteen Colonies and thus one of the nine colonial colleges established before the American Revolution. The institution moved to Newark in 1747, then to the current site nine years later, where it was renamed Princeton University in 1896.
			</p>
			<p align = justify>
			Princeton provides undergraduate and graduate instruction in the humanities, social sciences, natural sciences, and engineering. It offers professional degrees through the Woodrow Wilson School of Public and International Affairs, the School of Engineering and Applied Science, the School of Architecture and the Bendheim Center for Finance.
            </p>
			<p align = justify>
			The university has been associated with 41 Nobel laureates, 21 National Medal of Science winners, 14 Fields Medalists, the most Abel Prize winners and Fields Medalists (at the time of award) of any university (five and eight, respectively), 10 Turing Award laureates, five National Humanities Medal recipients, 209 Rhodes Scholars, and 126 Marshall Scholars. Two U.S. Presidents, 12 U.S. Supreme Court Justices (three of whom currently serve on the court), and numerous living billionaires and foreign heads of state are all counted among Princeton's alumni.
            </p>
          	 </h4>
		<h5><a href="http://www.princeton.edu/main/" ><img src = "princeton_logo.png"></a><a href="https://en.wikipedia.org/wiki/Princeton_University" ><img src="wiki.png"></h5></a>
		</div>
		</div>
		<div class = "container">
		<div class = "row">
	    <div class ="col-xs-12" style="color: white;">
		
		<address>
				<h5>TE comp science D J Sanghvi<br>
				Vile parle (west) Mumbai</h5>
				</address>
		    </div>
        </div>
		<div class = "row">
	    	<div class ="col-xs-12" style="color: white;">
		       <footer><h4>Powered by md web technologies</h4></footer>
	        </div>
	    </div>
		</div>
			
	</body>
</html>

   
      
   
     
         
   