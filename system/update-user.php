<?php 
	session_start();
	include "../config/conn.php";

	$user_id = $_POST['user_id'];
	$username = $_POST['username'];
  $account_number = $_POST['account_number'];
	$user_name = $_POST['user_name'];
	$user_bank = $_POST['user_bank'];
	$password = $_POST['password'];
	$division_id = $_POST['division_id'];

	
	try {
        // set the PDO error mode to exception
        $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $row = ("UPDATE user SET username='$username', account_number='$account_number', user_name='$user_name', user_bank='$user_bank', password='$password', division_id='$division_id' WHERE user_id='$user_id'");
        // use exec() because no results are returned
        $dbconnect->exec($row);
        echo "New record created successfully";
        header("location:../views/admin/user.php?page=1A");
      } catch(PDOException $e) {
        echo $row . "<br>" . $e->getMessage();
      }
      
      $dbconnect = null;
	
?>