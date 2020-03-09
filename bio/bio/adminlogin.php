<?php

// session_start();
if (isset($_REQUEST['login'])) {
	# code...
	$username = 'radssoonadmin' ;
	$password = 'only1adminnot2' ;
	$reqUsername = $_REQUEST['adminUsername'];
	$reqPassword = $_REQUEST['adminPassword'];

	if ($reqUsername == $username && $reqPassword == $password) {
		# code...
		session_start();
		$_SESSION['adminLogin'] = true ;
		echo "Login Success Click <a href ='index.php' >Home Page</a>";

		// header('location : index.php');
		// include 'index.php';
	}
	else{
		session_start();
		$_SESSION['adminLogin'] = false ;

	}

}

?>