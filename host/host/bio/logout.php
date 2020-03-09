<?php session_start(); unset($_SESSION['adminLogin']); session_destroy();
header("location:index.php"); 

?>