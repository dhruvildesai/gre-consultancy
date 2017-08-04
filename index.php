<?php
	session_start();
?>
<!DOCTYPE html>
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
						<li class="active center_align"><a class = "active" href="index.php">Home</a></li>
						<li class= "dropdown center_align" >
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
		<div class="container">
		<div id="grecarousel" class="carousel slide" align="center" data-ride="carousel" width="100%" height="500px">
			<ol class ="carousel-indicators">
				<li data-target="#grecarousel" data-slide-to="0" class="active"></li>
				<li data-target="#grecarousel" data-slide-to="1"></li>
				<li data-target="#grecarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox" width="100%" height="500px">
				<div class="item active">
					<img src="california-university-campus.jpg" alt="california university">
				</div>
				<div class="item">
					<img src="harvard-university-campus.jpg" align="middle" alt="harvard university">
				</div>
				<div class="item">
					<img src="mit-university-campus.jpg" alt="mit university">
				</div>
			</div>
			<a class="left carousel-control" href="#grecarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a> 
			<a class="right carousel-control" href="#grecarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a> 
		</div>
		</div>
		<br><br><br>
		<div class="container"> 
		<div class="jumbotron banner">
				<br>
				<br>
                <!--this is the centre text--> 
                <font color="black">
                <b>	
				<h2 style="text-align:center;"><b>Looking to study MS?</b><h2>
				<h4 style="text-align:center;"><i>Get help from our counsellors, apply and study at top 	Universities in USA</i></h4>
				<p><i><center><h5>Get all the help you need at your doorstep</h5></center></i></p>
				<p><i><center><h6>The world is a book, and those who do not travel read only a page.-Saint Augustine</h6></center></i></p>
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
