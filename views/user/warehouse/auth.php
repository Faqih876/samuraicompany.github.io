<?php 
	include '../../config/conn.php';

	//Check login status
	if ($_SESSION['status'] == 'login') {
		if ($_SESSION['division'] == 'warehouse') {
			header("location: ../".$_SESSION['division']."/home.php?page=home");
			isset($_SESSION['status']);
		}else{
			header("location: ../login.php?message=you are not admin");
		}
	}else{
		header("location: ../login.php?message=not_logged_in");
	}

?>