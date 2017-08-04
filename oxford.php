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
      	 background-image: url("oxford_university.jpg"); 
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
			<h2><font face="Times New Roman"><a href="http://www.ox.ac.uk/" >Oxford University</a> <a href="toronto.php"><img src="right.png" align="right" hspace="20"></a><a href="harward.php"><img src="left.png" align="right" ></a></h2>
		</p>
		<p align = justify>
			<h4>The University of Oxford (informally Oxford University or simply Oxford) is a collegiate research university located in Oxford, England, United Kingdom. While having no known date of foundation, there is evidence of teaching as far back as 1096, making it the oldest university in the English-speaking world and the world's second-oldest surviving university.It grew rapidly from 1167 when Henry II banned English students from attending the University of Paris. After disputes between students and Oxford townsfolk in 1209, some academics fled northeast to Cambridge where they established what became the University of Cambridge.The two "ancient universities" are frequently jointly referred to as "Oxbridge".
			</p>
			<p align = justify>
			The university is made up of a variety of institutions, including 38 constituent colleges and a full range of academic departments which are organised into four divisions.All the colleges are self-governing institutions as part of the university, each controlling its own membership and with its own internal structure and activities. Being a city university, it does not have a main campus; instead, all the buildings and facilities are scattered throughout the city centre. Most undergraduate teaching at Oxford is organised around weekly tutorials at the self-governing colleges and halls, supported by classes, lectures and laboratory work provided by university faculties and departments.
            </p>
			<p align = justify>
			Oxford is the home of the Rhodes Scholarship, one of the world's oldest and most prestigious scholarships, which has brought graduate students to study at the university for more than a century. The university operates the world's oldest university museum, as well as the largest university press in the world and the largest academic library system in Britain. Oxford has educated many notable alumni, including 27 Nobel laureates, 27 Prime Ministers of the United Kingdom, and many foreign heads of state.
            </p>
          	 </h4>
		<h5><a href="http://www.ox.ac.uk/" ><img src = "oxford_univ_logo.png"></a><a href="https://en.wikipedia.org/wiki/University_of_Oxford" ><img src="wiki.png"></h5></a>
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

   
      
   