<?php
if (isset($_REQUEST['login'])) {
	# code...
	$username = '1';
	$password = '1' ;
	$reqUsername = $_REQUEST['adminUsername'];
	$reqPassword = $_REQUEST['adminPassword'];

	if ($reqUsername == $username && $reqPassword == $password) {
		session_start();
		$_SESSION['adminLogin'] = true ;
		header("location:index.php");
	}
	else{
	    session_start();
		$_SESSION['adminLogin'] = false ;
		header("location:ra.php");
	}

}

?>