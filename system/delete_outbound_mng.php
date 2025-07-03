<?php 

	include "../config/conn.php";

	$so_id = $_GET['id'];

	$row = $dbconnect->query("DELETE FROM outbound_mng WHERE so_id='$so_id'");
	
	
	header("location:../views/user/client/outbound_mng.php?page=2A");

?>