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
			<h2><font face="Times New Roman" color = "black"><a href="https://web.mit.edu" target = "_blank">Massachusetts Institute of Technology</a>
			<a href="georgia.php"><img src="right.png" align="right" hspace="20"></a><a href="queen.php"><img src="left.png" align="right" ></a>
			</h2>
		</p>
		<p align = justify>
			<h4>The Massachusetts Institute of Technology (MIT) is a private research university in Cambridge, Massachusetts. Founded in 1861 in response to the increasing industrialization of the United States, MIT adopted a European polytechnic university model and stressed laboratory instruction in applied science and engineering. 
			</p>
			<p align = justify>
			MIT, with five schools and one college which contain a total of 34 departments, is often cited as among the world's top universities.The Institute is traditionally known for its research and education in the physical sciences and engineering, and more recently in biology, economics, linguistics, and management as well. 
            </p>
            <p align = justify>
			The mission of the Massachusetts Institute of Technology is to advance knowledge and educate students in science, technology, and other areas of scholarship that will best serve the nation and the world in the 21st century. We are also driven to bring knowledge to bear on the world's great challenges.</p>
			</h4>
		<h5>You can also refer to the following websites for more information:<br>
		<a href="https://web.mit.edu" target = "_blank">	
		<img src = "mitlogo.jpeg"><img src="mit_logo.jpg"></a><a href="https://en.wikipedia.org/wiki/Massachusetts_Institute_of_Technology"  target = "_blank"><img src="wiki.png"></a>          
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

   
   