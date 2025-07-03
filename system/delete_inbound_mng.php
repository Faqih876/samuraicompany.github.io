<?php 

	include "../config/conn.php";

	$smu_id = $_GET['id'];

	$row = $dbconnect->query("DELETE FROM inbound_mng WHERE smu_id='$smu_id'");
	
	
	header("location:../views/user/client/inbound_mng.php?page=1A");

?>