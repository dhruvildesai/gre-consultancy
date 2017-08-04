<!DOCTYPE html>
<html>
<head>
    <title>GRE CONSULTANCY</title>
        <link rel="stylesheet2" type="text/css" href="stylesheet.css"></link>
        <link href="css/bootstrap.min.css" rel="stylesheet"></link>
        <script src="js/jquery-1.12.4.min.js"></script>
        <!--Include all compiled plugins (below), or include individual files as needed --> 
        <script src="js/bootstrap.min.js"></script>
<style>
input
{
    float: middle;
    clear: both;
}
input[type=text]{
    width: 40%;
    background-color:lightgrey;
    padding:12px 20px;
    margin-bottom: 10px;
    display: inline-block;
    box-sizing: border-box;
    border-left: 10px solid red;
    border-radius: 4px;
    align-self: center;
}
select {
    width: 10%;
    background-color:lightgrey;
    padding:12px 5px;
    margin: 10px 0;
    display: inline-block;
    border-left: 10px solid red;
    border-radius: 4px;
    align-self: center;
}

input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}
input[type=textbox]
{
     width: 40%;
    padding:12px 20px;
    margin-bottom: 10px;
    display: inline-block;
    background-color:lightgrey;
    border-left: 10px solid red;
    border-radius: 4px;
    
}
input[type=password]
{
    width: 40%;
    background-color:lightgrey;
    padding:12px 20px;
    margin-bottom: 10px;
    display: inline-block;
    border-left: 10px solid red;
    border-radius: 4px;
}
input[type=email]
{
    width: 40%;
    background-color:lightgrey;
    padding:12px 20px;
    margin-bottom: 10px;
    display: inline-block;
    border-left: 10px solid red;
    border-radius: 4px;
}
input[type=submit]:hover {
    background-color: #45a049;
}
textarea
{
    width: 40%;
    background-color:lightgrey;
    padding:12px 20px;
    margin-bottom: 10px;
    display: inline-block;
    border-left: 10px solid red;
    border-radius: 4px;
}
.mydiv {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 0px;
    margin-left: 0px
}
p
{
  font-size: 30px;
  font-weight:bold;
}
form
{
   margin-left: 40px;
}
label
{
  font-size:20px;
  font-weight:bold;
}
</style>

<script language="javascript">
	function onclickcheck()
    {
       var valid = true;
       var name = document.f1.username.value;
       var checks = /^[a-zA-z][a-zA-z ]+[a-zA-z]*$/;
       var pass = document.f1.pass.value;
       var checkpass = document.f1.checkpass.value;
       var checks1 = /^[a-zA-z]+[a-zA-z0-9!@#$%^&*)(]*$/;
       var checkemail1 = /^[a-z][.a-z0-9!#$%^&*)(]+[@]+([a-z][.]|[a-z])*$/;
       //var checkmail2 = /^[^[.!#$%^&*][.!#$%^&*]]+[a-z0-9.!#$%^&*]@[a-z.!#$%^&*]*$/;
       var ema = document.f1.emailid.value;
       if((checks.test(name))&&(checks1.test(pass))&&(pass == checkpass)&&(pass.length>=6)&&(checkemail12.test(ema)))
         alert("Done");
       else
       {
         alert("Invalid data entry");
         valid = false;
       }
       return valid;
       /*if((checks1.test(pass))&&(pass == checkpass))
         alert("Done");
       else
         alert("Invalid password");*/
    }
</script>
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
                        <li class="center_align"><a href="search.html">Search</a></li>
                        <li class="center_align"><a href="contact_us.html">Contact Us</a></li>
                        <li class="center_align"><a href="about.html">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href= "form.html"><span class="glyphicon glyphicon-user"></span>Sign up</a></li>
                        <li><a href= "login.html"><span class="glyphicon glyphicon-log-in"></span>Login</a></a></li>       
                    </ul>
                    </div>
                </h3>
            </div>
        </div>
        </div>
        </nav>
        </div>
   <div class = "container">
   <center><p> Sign Up Form</p></center>
   <div class = "col-xs-2"></div>
   <div class = "col-xs-10">
   <form name="f1" method="POST" action="submit.php">
    <label for="fname">First Name</label>
    <br>
    <input type="text" id="fname" name="firstname"><!-- <span style="color:red"> * <?php echo $nameErr;?></span> -->
    <br>
    <label for="lname">Last Name</label>
    <br>
    <input type="text" id="lname" name="lastname">
    <br>
    <label for="country">Country Of Origin</label><br>
    <input type="text" id="count_name" name="country"><br>
    <label for="dob">DOB</label>:
    <br>
    <select name="date">
    <option>dd</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
    <option>13</option>
    <option>14</option>
    <option>15</option>
    <option>16</option>
    <option>17</option>
    <option>18</option>
    <option>19</option>
    <option>20</option>
    <option>21</option>
    <option>22</option>
    <option>23</option>
    <option>24</option>
    <option>25</option>
    <option>26</option>
    <option>27</option>
    <option>28</option>
    <option>29</option>
    <option>30</option>
    <option>31</option>
    </select>&nbsp
    <select name="month">
    <option>mm</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
    </select>&nbsp
    <select name="year">
    <option>yyyy</option>
    <option>1990</option>
    <option>1991</option>
    <option>1992</option>
    <option>1993</option>
    <option>1994</option>
    <option>1995</option>
    <option>1996</option>
    <option>1997</option>
    <option>1998</option>
    </select>
    <br>
    <br>
    <label for="add">address</label>:<br><textarea name="address" rows=3, cols=40>
    </textarea>
    <br>
    <br>
    <label for="user">Username</label><br><Input type="textbox" name="username"><span style="color:red"> * </span>
    <br>
    <br>
    <label for="pass">Password</label><br><Input class="align2" type="password" name="pass">
    <br>
    <br>
    <label for="conpass">Confirm Password</label><br><Input class="align1" type="password" name="checkpass">
    <br>
    <br>
    <label for="gen">Gender</label>: <Input type="radio" name="gender" value="M" checked><label for="gen"> Male</label>
            <Input type="radio" name="gender" value="F"><label for="gen">Female</label>
    <br>
    <br>
    <br>
    <label for="emailid">Email</label>:<br><Input type="email" name="emailid"><br>
    <label for="contact">Contact No</label>:<br><Input type="text" name="contact"><br>
    <label for="collname">Name of your college</label>:<br><Input type="text" name="collname"><br>
    <label for="yearpass">Year of passing</label>:<br>
    <select name="year_pass">
    <option>yyyy</option>
    <option>2012</option>
    <option>2013</option>
    <option>2014</option>
    <option>2015</option>
    <option>2016</option>
    <option>2017</option>
    <option>2018</option>
    <option>2019</option>
    <option>2020</option>
    </select><br>
    <label for="country">Country To Apply</label><br>
    <select name="apply">
    <option> UK </option>
    <option> USA </option>
    <option> Canada </option>
    </select><br>
    <label for="course">Masters of </label><br>
    <select name="course">
    <option> Mathematics  </option>
    <option> Architecture </option>
    <option> Computer science </option>
    <option> Electrical engineering </option>
    <option> Civil engineering </option>
    <option> Mechanical engineering </option>
    </select><br>
    <label for="gre">Have you given GRE</label>: <Input type="radio" name="gre" value="Y"checked><label for="gre_yes">Yes</label>
            <Input type="radio" name="gre" value="N"><label for="gre_no">No</label><br>
    <input type="submit" name="done" value="Submit" onsubmit ="return onclickcheck();">)
  </form>
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