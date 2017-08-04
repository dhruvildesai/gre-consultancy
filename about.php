<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head><title>My Web Page</title>
		<link rel="stylesheet2" type="text/css" href="stylesheet.css"></link>
		<link href="css/bootstrap.min.css" rel="stylesheet"></link>
		<script src="js/jquery-1.12.4.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		  <style>
		  div.mar
		  {
		  	margin-left:30px;
		  }
		  .back
          {
      	 	background-image: url("");
      	 	background-repeat: no-repeat;
          }
          .transbox
          {
         	margin: 30px;
         	background-color: #ffffff;
       	 	opacity: 0.7;
        	filter: alpha(opacity=70); 
         }
		  </style>
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
						<li class="center_align"><a class = "active" href="index.php">Home</a></li>
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
						<li class="active center_align"><a href="about.php">About</a></li>
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
        <div class = "container back">
        <div class = "jumbotron transbox">
			<p ><font face="verdana" size="3"> This website is useful for students aspiring to complete their postgrads from abroad.This website will help student choose the best college for their choice of field.Every year there are many students who wish to study abroad and apply to many colleges for the same.But while filling the form they get confused as to which college to apply.This in many cases leads to situations wherein a student lands in college which he/she is not satisfied with but is forced to study there.</p>
		    <p><h2>Exploration-------> Understanding-------> Analyzing -------> Best Decision making</p></h2>
			<p>We at GRE CONSULTANCY strive to help students pick the perfect college to the best of their ability.Our mission is to educate as many
			students as possible regarding abroad studies so that they have a bright future.Come join us in this mission and get the best possible
			colleges for your postgrads!!!
			    <br>
			    <br>
			    <center><h2> Lets get Started!!!  Take Your first step to success</h2></center>
			    <center><h4> All the best</h4></center>
			</font></b></p>
		</div>
		</div>	
        <div class = "container">
		<div class = "row">
	    	<div class ="col-xs-12">
				<hr>
				<address>
					<h5>TE comp science D J Sanghvi<br>
					Vile parle (west) Mumbai</h5>
			    </address>
            </div>
        </div>
		<div class = "row">
	    	<div class ="col-xs-12">
		       <footer><h4>Powered by md web technologies</h4></footer>
	        </div>
	    </div>
	    </div>
	</body>
</html>