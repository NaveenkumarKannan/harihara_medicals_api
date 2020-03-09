<?php session_start(); unset($_SESSION['adminLogin']); session_destroy();
header("Location : index.php"); 
// echo "<a href = 'index.php'>Home Page</a>" ;
?>