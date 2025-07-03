<?php 

include "../config/conn.php";

    $so_id = $_POST['so_id'];
    $tenant = $_POST['tenant'];
    $sku = $_POST['sku'];
    $category = $_POST['category'];
	$quantity = $_POST['quantity_per_box'];
	$address = $_POST['address'];
	$status = $_POST['status'];

$row = $dbconnect->query("UPDATE picking_list SET tenant='$tenant', sku='$sku', category='$category', 
quantity='$quantity', address='$address', status='$status', WHERE so_id='$so_id'");

header("location:../views/user/warehouse/delivery_order.php?page=2A");
?>