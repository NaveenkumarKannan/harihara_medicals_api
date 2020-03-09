<?php
/* Database connection settings */
	 $servername = "localhost";
    $username = "id12184471_rabina";		//put your phpmyadmin username.(default is "root")
    $password = "rabina";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "id12184471_rabina";
    
 
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>