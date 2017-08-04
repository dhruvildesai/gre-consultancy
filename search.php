<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>GRE CONSULTANCY</title>
		<link rel="stylesheet2" type="text/css" href="stylesheet.css"></link>
		<link href="css/bootstrap.min.css" rel="stylesheet"></link>
		<script src="js/jquery-1.12.4.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<style>
			select {
    				width: 7%;
    				background-color:lightgrey;
   					padding:12px 5px;
    				margin: 10px 0;
    				display: inline-block;
    				border-left: 10px solid red;
    				border-radius: 4px;
    				align-self: center;
			       }
			label  {
  				    font-size:20px;
  					font-weight:bold;
					text-align:center;
			       }
		    .btnclass{
		    		width: 7%;
    				background-color:lightgrey;
   					padding:12px 5px;
    				margin: 10px 0;
    				display: inline-block;
    				border-left: 10px solid red;
    				border-radius: 4px;
    				align-self: center;
		          }
		    
                </style>
	</head>
	<body>
		<?php
	$conn = new mysqli("localhost","root","","gre_database_1");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$courses = $colleges = $city = "";
	if(isset($_POST['courses']))
	{
		$courses = $_POST["courses"];
	}
	if(isset($_POST['college']))
	{	
		$colleges = $_POST["college"];
	}
	if(isset($_POST['city']))
	{
		$city = $_POST["city"];
	}
	//echo $courses;
	$sql = "SELECT * from university where courses = '$courses' or city = '$city' or name = '$colleges'";
    $result = $conn->query($sql);
    
    
$conn->close();    
?>
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
				</header

				>
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
						<li class="active center_align"><a href="search.php">Search</a></li>
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
		<form method="POST" action = "" class="form-horizontal" role="form">
		<div class = "container">
		<div class = "row" style="background-color: white;">	
        <div class = "col-xs-12"> 
                <div class="form-group">
    			<div class="col-sm-3">
                <label for="College">University</label>
				<select  name="college" class="form-control">
                <option>    </option>						
                <option <?=($colleges == "University of California") ? 'selected="selected"': ''?>>University of California</option>						
                <option <?=($colleges == "Edmonton University") ? 'selected="selected"': ''?>>Edmonton University</option>
                <option <?=($colleges == "University of Alberta") ? 'selected="selected"': ''?>>University of Alberta</option>
                <option <?=($colleges == "Princeton University") ? 'selected="selected"': ''?>>Princeton University</option>
  				<option <?=($colleges == "Harward University") ? 'selected="selected"': ''?>>Harward University</option>
				<option <?=($colleges == "University of Oxford") ? 'selected="selected"': ''?>>University of Oxford</option>
				<option <?=($colleges == "University of Toronto") ? 'selected="selected"': ''?>>University of Toronto</option>
				<option <?=($colleges == "University of Waterloo") ? 'selected="selected"': ''?>>University of Waterloo</option>
				<option <?=($colleges == "Queens University") ? 'selected="selected"': ''?>>Queens University</option>
				<option <?=($colleges == "Massachusetts Institute Of Technology") ? 'selected="selected"': ''?>>Massachusetts Institute Of Technology</option>
                <option <?=($colleges == "Stanford University") ? 'selected="selected"': ''?>>Stanford University</option>
                <option <?=($colleges == "Georgia Institute Of Technology") ? 'selected="selected"': ''?>>Georgia Institute Of Technology</option></select>
                </div>
                <div class="col-sm-3">
                <label for="City" >City</label>                
                <select name="city" class="form-control" value="<?php echo $_POST['city'];?>">																				
                <option>    </option>						
                <option <?=($city == "Berkley") ? 'selected="selected"': ''?>>Berkley</option>						
                <option <?=($city == "Edmonton") ? 'selected="selected"': ''?>>Edmonton</option>
                <option <?=($city == "Cambridge") ? 'selected="selected"': ''?>>Cambridge</option>
                <option <?=($city == "Oxford") ? 'selected="selected"': ''?>>Oxford</option>
  				<option <?=($city == "Toronto") ? 'selected="selected"': ''?>>Toronto</option>
				<option <?=($city == "Atlanta") ? 'selected="selected"': ''?>>Atlanta</option>
				<option <?=($city == "Stanford") ? 'selected="selected"': ''?>>Stanford</option>
				<option <?=($city == "Waterloo") ? 'selected="selected"': ''?>>Waterloo</option>
				<option <?=($city == "Kingston") ? 'selected="selected"': ''?>>Kingston</option>
				<option <?=($city == "Princeton") ? 'selected="selected"': ''?>>Princeton</option>
				</select>
			    </div>
                <div class="col-sm-3">
				<label for="Course">Course</label>   
				<select name="courses" class="form-control">																				
                <option>    </option>						
                <option <?=($courses == "Masters in Civil Engineering") ? 'selected="selected"': ''?>>Masters in Civil Engineering</option>						
                <option <?=($courses == "Masters in Computer Science") ? 'selected="selected"': ''?>>Masters in Computer Science</option>
                <option <?=($courses == "Masters in Architecture Design") ? 'selected="selected"': ''?>>Masters in Architecture Design</option>
                <option <?=($courses == "Masters in Electrical Engineering") ? 'selected="selected"': ''?>>Masters in Electrical Engineering</option>
  				<option <?=($courses == "Masters in Mechanical Engineering") ? 'selected="selected"': ''?>>Masters in Mechanical Engineering</option>
				<option <?=($courses == "Masters in Mathematics") ? 'selected="selected"': ''?>>Masters in Mathematics</option>
				</select>   
			    </div>
	            <div class="col-sm-2">
                <br><br>
				<input type = "submit" name = "searchbtn" value="Search" class = "btn btn-default">
		        </div>
		        </div>
		        </form>	
		<?php
		echo "<div class = \"table-responsive col-xs-12\">";
		if($result->num_rows > 0)
        {		echo "<table class = \"table table-striped\"><thead style=\"background-color:#637E99; font-weight:bold; color: white;\"><tr><th>University
    </th><th>City</th><th>Course</th></tr></thead>";
                echo "<tbody>";
         	    while ($row = $result->fetch_assoc()) {
        		echo "<tr><td>".$row["name"]."</td><td>".$row["city"]."</td><td>".$row["courses"]."</td></tr><br>" ;

        		# code...
               }
               echo "</tbody>";
               echo "</table>";

        }
        else echo "No records found";   
        echo "</div>"
        ?>					
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
