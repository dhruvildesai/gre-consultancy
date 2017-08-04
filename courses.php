<?php
	session_start();
?>
<html>
  	<head>
		<title>GRE CONSULTANCY</title>
		<style>
			.st
			{
				border-left: 6px solid violet;
		  	 	background-color: lightgrey;
		  		width: 500px;
		  		height: 25px;
				padding-top: 10px;
				padding-bottom: 50px;
				padding-left: 90px;
                padding-right: 90px;
				margin-left: 20px;
				color: green;
                border-radius: 10px;
    		        }
 			.st1
 			{
	 	        text-transform: capitalize;
	 			color:black;
	 			width: 500px;
	    		height: 25px;
    			padding-bottom: 20px;
                display:block;
    			padding-left: 5px;
				letter-spacing: 0.3px;
                font-family: "serif";
                font-style: normal;
 			}
 			a
 			{
 				text-decoration: none;
 			}
            .st:hover
            {
                background-color: grey;
            }
 		</style>
		<link rel="stylesheet2" type="text/css" href="stylesheet.css"></link>
		<link href="css/bootstrap.min.css" rel="stylesheet"></link>
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
						<li class="center_align"><a class = "active" href="index.php">Home</a></li>
						<li class= "active dropdown center_align" >
							<a class="active dropdown-toggle" data-toggle="dropdown" href = "#info">Information
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
        <div class = "col-xs-6">
			<center>
				   <a href="mscivil.php">
					<div class="list-group-heading active" style="background-color: orange; color: black; border-radius: 5px;"><h3><b>Masters of Engg in Civil Engg</b></h3>
						<h4 class="list-group-item" style="background-color: lightgrey;">
						    About 1.5 to 2 yrs<br>
						</h4>
					</div>
				  </a>
			</center>
		</div>		  
        <div class = "col-xs-6">
			<center>
					<a href="mscs.php">
					<div class="list-group-heading active" style="background-color: orange; color: black; border-radius: 5px;"><h3><b>Masters in Computing Science</b></h3>
						<h4 class="list-group-item" style="background-color: lightgrey;">
					        About 1.5 to 2 yrs (Canada)<br>
							About 1.5 yrs (USA)
						</h4>
					</div>
			</center>
				</a>
		</div>		  
        <div class = "col-xs-6">
			<center>
					<a href="msarc.php">
					<div class="list-group-heading active" style="background-color: orange; color: black; border-radius: 5px;"><h3><b>Masters of Architecture Design</b></h3>
						<h4 class="list-group-item" style="background-color: lightgrey;">
					    	About 2.5 to 3 yrs<br>
						</h4>
					</div>
                    </a>
			</center>
		</div>		  
        <div class = "col-xs-6">
			<center>
					<a href="msec.php">
					<div class="list-group-heading active" style="background-color: orange; color: black; border-radius: 5px;"><h3><b>Masters of Electrical Engg</b></h3>
						<h4 class="list-group-item" style="background-color: lightgrey;">
					    	About 1.5 to 2 yrs<br>
						</h4>
					</div>
				</a>
			</center>
		</div>		  
        <div class = "col-xs-6">
			<center>
					<a href="msmech.php">
					<div class="list-group-heading active" style="background-color: orange; color: black; border-radius: 5px;"><h3><b>Msc in Mechanical Engg</b></h3>
						<h4 class="list-group-item" style="background-color: lightgrey;">
					    	About 2 to 2.5 yrs<br>
						</h4>
					</div>
				</a>
			</center>
		</div>		  
        <div class = "col-xs-6">
			<center>
					<a href="msmath.php">
					<div class="list-group-heading active" style="background-color: orange; color: black; border-radius: 5px;"><h3><b>Masters of Mathematics</b></h3>
						<h4 class="list-group-item" style="background-color: lightgrey;">
					    	About 2.5 to 3 yrs <br>
						</h4>
					</div>
				</a>
			</center>
		</div>
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

    </body>
</html>