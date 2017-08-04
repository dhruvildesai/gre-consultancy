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
      	 background-image: url("harvard_university.jpg"); 
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
			<h2><font face="Times New Roman"><a href="http://www.harvard.edu/" >Harvard University</a> <a href="oxford.php"><img src="right.png" align="right" hspace="20"></a><a href="princeton.php"><img src="left.png" align="right" ></a></h2>
		</p>
		<p align = justify>
			<h4>Harvard University is a private, Ivy League research university in Cambridge, Massachusetts, established 1636. It is the United States' oldest institution of higher learning ,large, highly residential research university.It operates several arts, cultural, and scientific museums, alongside the Harvard Library, which is the world's largest academic and private library system, comprising 79 individual libraries with over 18 million volumes.
			</p>
			<p align = justify>
			The University is organized into eleven separate academic units�ten faculties and the Radcliffe Institute for Advanced Study�with campuses throughout the Boston metropolitan area:its 209-acre (85 ha) main campus is centered on Harvard Yard in Cambridge, approximately 3 miles (5 km) northwest of Boston; the business school and athletics facilities, including Harvard Stadium, are located across the Charles River in the Allston neighborhood of Boston and the medical, dental, and public health schools are in the Longwood Medical Area.Harvard's $37.6 billion financial endowment is the largest of any academic institution.
            </p>
			<p align = justify>
			 Harvard's alumni include eight U.S. presidents, several foreign heads of state, 62 living billionaires, 335 Rhodes Scholars, and 242 Marshall Scholars.To date, some 150 Nobel laureates, 18 Fields Medalists and 13 Turing Award winners have been affiliated as students, faculty, or staff.
            </p>
          	 </h4>
		<h5><a href="http://www.harvard.edu/" ><img src = "harvard_logo.png"></a><a href="https://en.wikipedia.org/wiki/Harvard_University" ><img src="wiki.png"></h5></a>
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

   

   
      
   