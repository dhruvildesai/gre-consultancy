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
	.transbox
      {
      	margin: 30px;
        background-color: #ffffff;
        opacity: 0.8;
        filter: alpha(opacity=70); 
      }
      a
      {
      	text-decoration: none;
      }
      img.maralign
      {
      	margin-left: 30px;
      }
      .back
      {
      	 background-image: url("californai.jpg"); 
      	 background-attachment: fixed;
      }

  </style></head>
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
			<h2><font face="Times New Roman"><a href="https://universityofcalifornia.edu" target = "_blank">California University</a> 
			<a href="edmonton.php"><img src="right.png" align="right" hspace="20"></a><a href="stanford.php"><img src="left.png" align="right" ></a></h2>
		</p>
		<p align = justify>
			<h4>The University of California (UC) is a public university system in the U.S. state of California. Under the California Master Plan for Higher Education, the University of California is a part of the state's three-system public higher education plan, which also include the California State University system and the California Community Colleges System.
			</p>
			<p align = justify>
			The University of California was founded in 1868 in Berkeley, California. UC Merced opened for classes in fall 2005 and is the tenth and newest campus,. Nine campuses enroll both undergraduate and graduate students; one campus, UC San Francisco, enrolls only graduate and professional students in the medical and health sciences. In addition, the UC Hastings College of Law, located in San Francisco, is legally affiliated with UC, but other than sharing its name is effectively autonomous from the rest of the system.
            </p>
            <p align = justify>
			The University of California's campuses boast large numbers of distinguished faculty in almost every field and it is widely regarded as one of the top university systems in the world. The University of California has won more Nobel Prizes than any other collegiate system. The universities within the University of California system are perennially ranked highly by various publications. Most notably, UC Berkeley and UCLA are both ranked as Top 10 Universities worldwide by U.S. News & World Report and UC Berkeley, UCLA, and UC San Diego are respectively ranked 4th, 12th, and 14th worldwide by the Academic Ranking of World Universities.</p>
			</h4>
		<h5>You can also refer to the following websites for more information:<br>
		<a href="http://universityofcalifornia.edu/" target = "_blank">	
		<img src = "cal_logo.png"><img src="cal.jpg"></a><a href="https://en.wikipedia.org/wiki/University_of_California"  target = "_blank"><img src="wiki.png"></a>          
		</div>
		<br>
		</div>
		</div>
		<div class = "container">
		<div class = "row">
	    	<div class ="col-xs-12" style="color: white;">
		
		<address>
				<h6>TE comp science D J Sanghvi<br>
				Vile parle (west) Mumbai</h6>
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
   
   