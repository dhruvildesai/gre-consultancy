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
      	 background-image: url("stanford.jpg"); 
      	 background-attachment: fixed;
      }
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
        <div class = "col-xs-12" style="background-color:white; opacity: 0.8; filter: alpha(opacity=70); ">
    	<p>
			<h2><font face="Times New Roman"><a href="https://www.stanford.edu" target = "_blank">Stanford University</a> 
			<a href="california.php"><img src="right.png" align="right" hspace="20"></a><a href="georgia.php"><img src="left.png" align="right" ></a></h2>
		</p>
		<p align = justify>
			<h4>Stanford University, officially Leland Stanford Junior University,is a private research university in Stanford, California. The university was founded in 1885 by Leland Stanford, former Governor of and U.S. Senator from California and railroad tycoon, and his wife, Jane Lathrop Stanford, in memory of their only child, Leland Stanford Jr., who had died of typhoid fever at age 15 the previous year. Stanford admitted its first students on October 1, 1891 as a coeducational and non-denominational institution. Tuition was free until 1920. The main campus is in northern Santa Clara Valley adjacent to Palo Alto and between San Jose and San Francisco. Stanford also has land and facilities elsewhere. Its 8,180-acre (3,310 ha) campus is one of the largest in the United States.The university is also one of the top fundraising institutions in the country, becoming the first school to raise more than a billion dollars in a year.
			</p>
			<p align = justify>There are three academic schools that have both undergraduate and graduate students and another four professional schools. Students compete in 36 varsity sports, and the university is one of two private institutions in the Division I FBS Pac-12 Conference. It has gained 109 NCAA team championships, the second-most for a university, 476 individual championships, the most in Division I,and has won the NACDA Directors' Cup, recognizing the university with the best overall athletic team achievement, for 22 consecutive years, beginning in 1994–1995.
            </p>
			<p align = justify>
			Stanford faculty and alumni have founded many companies and companies founded by Stanford alumni generate more than $2.7 trillion in annual revenue, equivalent to the 10th-largest economy in the world (see List of Stanford University people § Company founders). It is the alma mater of 30 living billionaires, 17 astronauts, and 20 Turing Award laureates.It is also one of the leading producers of members of the United States Congress. Sixty Nobel laureates and seven Fields Medalists have been affiliated with Stanford as students, alumni, faculty or staff.
            </p>
          	 </h4>

		<h5>You can also refer to the following websites for more information:<br><a href="https://www.stanford.edu" target = "_blank">	
		<img src = "stanlogo.png"><img src="stanford-logo.png"></a><a href="https://en.wikipedia.org/wiki/Stanford_University"  target = "_blank"><img src="wiki.png"></a>          
		</div>
		<br>
		<hr>
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
   
      
   

   
      
   


   
      
   