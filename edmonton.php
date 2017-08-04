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
      	 background-image: url("edmonton.jpg"); 
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
			<h2><font face="Times New Roman"> <a href="http://edmontonuniversity.org/" target = "_blank">Edmonton University</a>
			<a href="alberta.php"><img src="right.png" align="right" hspace="20"></a><a href="california.php"><img src="left.png" align="right" ></a></h2>
		</p>
		<p align = justify>
			<h4>Concordia University of Edmonton, previously Concordia University College of Alberta, is an independent publicly funded university in Edmonton, Alberta, Canada. Accredited under the Alberta Post-secondary Learning Act, Concordia is primarily funded by the Government of Alberta, tuition, and private donations. 
			</p>
			<p align = justify>
			The university offers 45 majors and minors in the fields of Arts, Science and Management; 2 after-degree programs, 3 master's degrees, and several graduate certificates and diplomas. Through a faculty and course-sharing partnership, the University of Lethbridge maintains a small extension campus at the university.The Concordia Lutheran Seminary also shares the university grounds.
            </p>
          	 </h4>
		
		<a href="http://edmontonuniversity.org/" target = "_blank">	
		<img src = "edmontonlogo.png"></a><a href="https://en.wikipedia.org/wiki/Concordia_University_of_Edmonton"  target = "_blank"><img src="wiki.png"></a>    
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

   
     
   
   
    
   