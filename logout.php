<!DOCTYPE html>
<?php
	session_start ();
	session_destroy ();
	//setcookie (PHPSESSID, session_id(), time()-1);
?>
<html>
	<head>
		<title>GRE CONSULTANCY</title>
		<link rel="stylesheet2" type="text/css" href="stylesheet.css"></link>
		
		<link href="css/bootstrap.min.css" rel="stylesheet"></link>
		<style type="text/css">
			.banner
			{
				background-image: url(banner.jpg);
				background-attachment: fixed;
			}
		</style>
		<script src="js/jquery-1.12.4.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
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
						<li class="center_align"><a class = "active" href="index.html">Home</a></li>
						<li class= "dropdown center_align" >
							<a class="dropdown-toggle" data-toggle="dropdown" href = "#info">Information
								<span class= "caret"></span></a>
								<ul class = "dropdown-menu">
									<li><a href= "university.html">Top colleges</a></li>
									<li><a href = "courses.html">Top courses</a></li>
								</ul>
						</li>
						<li class="center_align"><a href="search.php">Search</a></li>
						<li class="center_align"><a href="contact_us.html">Contact Us</a></li>
						<li class="center_align"><a href="about.html">About</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href= "form.html"><span class="glyphicon glyphicon-user"></span>Sign up</a></li>
                        <?php
                        	session_start();
                        	if (isset($_SESSION ['sid']))
							{
                        		echo ("<li class=\"active\"><a href= \"logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span>Logout</a></a></li>");
							}
							else
							{	
                        		echo ("<li class=\"active\"><a href= \"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span>Login</a></a></li>");
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
		<div class="container"> 
		<div class="jumbotron banner">
				<br>
				<br>
                <!--this is the centre text--> 
                <font color="black">
                <b>	
				<h2 style="text-align:center;"><b>Logged out successfully!!!</b><h2>
                </b>
                </font>
				<address>
				<h5> <br><br> TE comp science D J Sanghvi<br>
				Vile parle (west) Mumbai<br><br><br></h5>
				</address>
		</div>
		</div>
		<div class="container"> 
		<div class = "row">
	    	<div class ="col-xs-12">
				<footer><h4>Powered by md web technologies</h4></footer>
			</div>
		</div>
	</div></h2>
	</body>
</html>
