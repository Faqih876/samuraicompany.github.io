<?php 
// activate session php
session_start();

include '../config/conn.php';


// get form data
$username = $_POST['username'];
$password = $_POST['password'];

$username_admin = 'admin_wms';      
$password_admin = '123456';   

    if (($username == $username_admin) and ($password == $password_admin)){
		$_SESSION['status'] = "login";
		$_SESSION['role'] = 'Admin';
		$_SESSION['username'] = 'admin_wms';
		header("location:../views/admin/home.php?page=home");
    }else {
		// select data that match with input
		$row = $dbconnect->query("SELECT * FROM user INNER JOIN division ON user.division_id = division.division_id WHERE username = '$username' and password = '$password';");

		// get data
		$data = $row->fetch();   

		if($row->rowCount() > 0){
			$_SESSION['username'] = $data['username'];
			$_SESSION['division'] = $data['division_name'];
			$_SESSION['status'] = "login";
			header("location:../views/user/".$_SESSION['division']."/home.php?page=home");
		}else{
			header("location:../views/login.php?message=failed");      
		}
	}


?>