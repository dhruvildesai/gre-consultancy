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
      	 background-image: url("alberta.jpg"); 
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
        <div class = "col-xs-12" style="background-color:white; opacity: 0.85; filter: alpha(opacity=80); ">
     		<p>
			<h2><font face="Times New Roman"> <a href="https://www.ualberta.ca/" target = "_blank">University of Alberta</a>
			<a href="princeton.php"><img src="right.png" align="right" hspace="20"></a><a href="edmonton.php"><img src="left.png" align="right" ></a></h2></h2>
		</p>
		<p align = justify>
			<h4>The University of Alberta (also known as U of A and UAlberta) is a public research university located in Edmonton, Alberta, Canada. It was founded in 1908 by Alexander Cameron Rutherford,the first premier of Alberta, and Henry Marshall Tory,its first president. Its enabling legislation is the Post-secondary Learning Act. 
			</p>
			<p align = justify>
			The university comprises four campuses in Edmonton, the Augustana Campus in Camrose, and a staff centre in downtown Calgary. The original north campus consists of 150 buildings covering 50 city blocks on the south rim of the North Saskatchewan River valley, directly across from downtown Edmonton. 39,000 students from Canada and 150 other countries participate in 400 programs in 18 faculties.
            </p>
			<p align = justify>
			The University of Alberta is a major economic driver in Alberta. The university�s impact on the Alberta economy is an estimated $12.3 billion annually, or five per cent of the province�s gross domestic product. With more than 15,000 employees, the university is Alberta's fourth-largest employer.The university has been recognized by the Academic Ranking of World Universities, the QS World University Rankings and the Times Higher Education World University Rankings as one of the top five universities in Canada and one of the top 100 universities worldwide.
            </p>
          	 </h4>
		    	<a href="https://www.ualberta.ca/" target = "_blank">	
		<img src = "albertalogo.png"></a><a href="https://en.wikipedia.org/wiki/University_of_Alberta"  target = "_blank"><img src="wiki.png"></a>          
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
   
      
   