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
      	 	background-image: url("georgia_university.jpg"); 
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
			<h2><font face="Times New Roman"><a href="http://www.gatech.edu/" >Georgia Institute of Technology</a> <a href="stanford.php"><img src="right.png" align="right" hspace="20"></a><a href="queen.php"><img src="left.png" align="right" ></a> </h2>
		</p>
		<p align = justify>
			<h4>The Georgia Institute of Technology (commonly referred to as Georgia Tech, Tech, or GT) is a public research university in Atlanta, Georgia, in the United States. It is a part of the University System of Georgia and has satellite campuses in Savannah, Georgia; Metz, France; Athlone, Ireland; Shanghai, China; and Singapore.The educational institution was founded in 1885 as the Georgia School of Technology as part of Reconstruction plans to build an industrial economy in the post-Civil War Southern United States. Initially, it offered only a degree in mechanical engineering. By 1901, its curriculum had expanded to include electrical, civil, and chemical engineering. In 1948, the school changed its name to reflect its evolution from a trade school to a larger and more capable technical institute and research university.
			</p>
			<p align = justify>
			Today, Georgia Tech is organized into six colleges and contains about 31 departments/units, with emphasis on science and technology. It is well recognized for its degree programs in engineering, computing, business administration, the sciences, design, and liberal arts. Georgia Tech is ranked 7th among all public national universities in the United States and 36th among all colleges and universities U.S. News & World Report rankings, and Georgia Tech is also highly regarded internationally for its engineering and business programs.Georgia Tech's main campus occupies part of Midtown Atlanta, bordered by 10th Street to the north and by North Avenue to the south, placing it well in sight of the Atlanta skyline. The campus was the site of the athletes' village and a venue for a number of athletic events for the 1996 Summer Olympics. The construction of the Olympic village, along with subsequent gentrification of the surrounding areas, enhanced the campus.
            </p>
			<p align = justify>
			Student athletics, both organized and intramural, are a part of student and alumni life. The school's intercollegiate competitive sports teams, the four-time football national champion Yellow Jackets, and the nationally recognized fight song "Ramblin' Wreck from Georgia Tech", have helped keep Georgia Tech in the national spotlight. Georgia Tech fields eight men's and seven women's teams that compete in the NCAA Division I athletics and the Football Bowl Subdivision. Georgia Tech is a member of the Coastal Division in the Atlantic Coast Conference.
            </p>
          	 </h4>
		<h5><a href="http://www.gatech.edu/" ><img src = "georgia_univ_logo.png"></a><a href="https://en.wikipedia.org/wiki/Georgia_Institute_of_Technology" ><img src="wiki.png"></h5></a>
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

   
      
   