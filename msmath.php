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
	      	 background-image: url("MIT_coll.jpg"); 
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
			<h2><font face="Times New Roman" color = "black">Msc in Mathematics</a>
			<a href="mscivil.php"><img src="right.png" align="right" hspace="20"></a><a href="msmech.php"><img src="left.png" align="right" ></a>
			</h2>
		</p>
		<p align = justify>
		<b>Credits:</b> 30-credit program (full or part time)<br>
		<b>Program Length:</b> 18 months<br>
		<b>Start Dates:</b> Rolling Admissions<br>
		<b>Instructional Method:</b> Hybrid (face-to-face classes with online component), as well as some offerings online. <br>

		<h3><b>Introduction</b></h3>
			<h4>Mathematics is a broad field, and a Master in Mathematics means you can take degrees in anything from Modeling, Financial Mathematics, and Computing to Logic and Statistics. There are several programs so if you are looking to widen your horizons, a Master in Mathematics can also help supplement knowledge of science, including Physics, Chemistry and Biology. Students seeking a Master in Mathematics must have the appropriate educational background and experience necessary for these challenging programs.
			</p>

<h3><b>Program Options and Featues</b></h3>
			<h4><ul>
			<li>Complete the program in as little as 18 months.</li>
			<li>Experience small classes and close interaction with faculty in both hybrid (combination of online and classroom learning) and online delivery methods.</li>
			<li>30-credit program delivered in 16-week semesters.</li>
			<li>Many advanced electives – choose from a wide variety of specializations in today's mathematical applications.</li>
			</ul>
<h3><b>Key Outcomes</b></h3>
			<h4><ul>
			<li>The graduate is able to apply knowledge of mathematics, science, and engineering.</li>
			<li>The graduate has skills in using computer calculations as a tool to carry out scientific investigations and in planning and performing calculations, usually computer-based, using mathematical models.</li>
			<li>The graduate is able to make contributions to the generation of new scientific insights or to the innovation of new applications of research within the field.</li>
			</ul>
	
		<h5>You can also refer to the following websites for more information:<br>
		<a href="http://www.masterstudies.com/Masters-Degree/Mathematics/" target = "_blank">	
		<img src = "mitlogo.jpeg"><img src="mit_logo.jpg">
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

   
   