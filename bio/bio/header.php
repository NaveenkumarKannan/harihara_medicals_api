<?php
session_start();
require 'adminlogin.php';
?>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="icon" href="icons/logo.png" type="image/png" sizes="16x16">
	<link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
	<style>
		table.dataTable tbody tr{
			background: black ;
			color: #fff ;
		}
		table.dataTable tbody tr:hover
		{
			background: #212121 !important; 
		}
		thead{
			background: white;
		}
		#userlog:hover{
			background: black;
		}
	</style>
</head>
<header>
	<div class="header">
		<div class="logo">
			<a href="index.php">Radssoon </a>
		</div>
	</div>
	<div class="topnav" id="myTopnav">
		<a href="index.php">Employees</a>
		<a href="UsersLog.php">Employees Records</a>
		<?php
			if (isset($_SESSION['adminLogin'])) {
				echo "<a href='ManageUsers.php'>Modify Employees</a>" ;
				echo "<a href='logout.php'>Logout</a>" ;
		}?>
		<a href="javascript:void(0);" class="icon" onclick="navFunction()">
		<i class="fa fa-bars"></i></a>
	</div>
</header>
<script>
	function navFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
	x.className += " responsive";
	} else {
	x.className = "topnav";
	}
	}
	
</script>