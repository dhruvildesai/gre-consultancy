<?php
// Start the session
session_start();
?>
<html>
  	<head>
		<title>GRE CONSULTANCY</title>
		<style>
            input[type=submit]:hover {
                background-color: #45a049;
            } 

        </style>
        <link rel="stylesheet2" type="text/css" href="stylesheet.css"></link>
        <link href="css/bootstrap.min.css" rel="stylesheet"></link>
        <script src="js/jquery-1.12.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            $name ="";
            $query="";
            $conn= mysqli_connect("localhost","root","", "gre_database_1");  
            if (!$conn)
            {
                die('Could not connect: ' . mysql_error());
            }  
            else
            { 
                if(isset($_POST['login_user']))
                {
                    $name = $_POST['login_user'];
                    $password = $_POST['login_pass'];
                    $checkdata = "select username from user where username='$name' and password = '$password';";
                    //$checkpass = ""
                    $query=mysqli_query($conn, $checkdata);
                    if(mysqli_num_rows($query)>0)
                    {
                        
                        $_SESSION['sid']=session_id();
                        $_SESSION['login_user']=$name;
                        header("location:index.php");
                    }
                }
            }
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
                        <li class="active"><a href= "login.html"><span class="glyphicon glyphicon-log-in"></span>Login</a></a></li>       
                    </ul>
                    </div>
                </h3>
            </div>
        </div>
        </div>
        </nav>
        </div>
                    <div class = "col-xs-2"></div>        
                        <div class = "col-xs-4">
					<form method="POST" action="">
                        <div class = "form-group">
                     	<label for="username" id="username">Username</label><br>
                     	<input type="text" name="login_user" class= "form-control" placeholder="Enter user name">
                     	<br>
                     	<label for="password">Password</label><br>
                     	<input type="password" name="login_pass" class= "form-control" placeholder="Enter password">
                     	<br>
                     	<input type="submit" value="login" name="done" class= "form-control">
                        <br>
                        <label for="status" id= "status" style="color:red"></label>
                     </div>
					</form>
                    <div class = "col-xs-12" style="color:red">
                    <?php
                        //echo $name;
                        if($name)
                        {
                            if(mysqli_num_rows($query)>0)
                            {
                                echo "<script>document.getElementById(\"status\").innerHTML = \"login success\"</script>";
                            }
                            else
                            {
                                echo "<script>document.getElementById(\"status\").innerHTML = \"Invalid username or password\"</script>";
                            }
                        }
                        else
                        {
                            echo "<script>document.getElementById(\"status\").innerHTML = \"\"</script>";

                        }
                        //echo "<script>document.getElementById(\"username\").innerHTML = \"\"</script>"
                    ?>
                    </div>
                 </div>
				</div>
			</div>
        <div class = "container">
        <div class = "row">
            <div class ="col-xs-12">
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
