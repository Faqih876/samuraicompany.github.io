<?php 

	include "../config/conn.php";

	$shipment_id = $_GET['id'];

	$row = $dbconnect->query("DELETE FROM shipment_status WHERE shipment_id='$shipment_id'");
	
	
	header("location:../views/user/transporter/shipment_status.php?page=2A");

?>