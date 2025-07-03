<?php 

	include "../config/conn.php";

	$po_id = $_GET['id'];

	$row = $dbconnect->query("DELETE FROM delivery_order WHERE po_id='$po_id'");
	
	
	header("location:../views/user/warehouse/delivery_order.php?page=4A");

?>