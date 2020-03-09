<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['Email_id'];

if (!empty($username) || !empty($password) ||  !empty($email) ) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "harihara_medicals";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     
     $INSERT = "INSERT Into admin (username, password, email) values('$username','$password','$email';
     //Prepare statement
     
     if ($rnum==0) {
      
      echo " record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
