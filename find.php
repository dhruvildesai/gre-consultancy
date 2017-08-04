<?php
	mysqli_connect("localhost","root","","gre_database_1") or die('Could not connect: ' . mysql_error());
	$courses = $colleges = $college = "";
	$courses = $_POST["Courses"];
	$colleges = $_POST["College"];
	$city = $_POST["city"];
	if(!empty(Courses))
		


?>