<?php
        	$name ="";
        	$conn= mysqli_connect("localhost","root","", "gre_database_1");  
        	if (!$conn)
        	{
            	die('Could not connect: ' . mysql_error());
        	}  
        	else
        	{ 
                if(isset($_POST['user_name']))
                {
                    $name = $_POST['user_name'];
                    $checkdata = "select username from user where username='$name';";
                    $query=mysqli_query($conn, $checkdata);
                    if(mysqli_num_rows($query)>0)
                    {
                        
                        print("NK");
                    }
                    else
                    {
                        print("OK");
                    }
                }
        	}
            exit();
?>