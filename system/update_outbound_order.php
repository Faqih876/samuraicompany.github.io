<?php 

include "../config/conn.php";

$so_id = $_POST['so_id'];
$so_no = $_POST['so_no'];
$tenant = $_POST['tenant'];
$sku_no = $_POST['sku_no'];
$category = $_POST['category'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];
$so_status = $_POST['so_status'];

$row = $dbconnect->query("UPDATE outbound_mng SET so_no='$so_no', tenant='$tenant', sku_no='$sku_no', quantity='$quantity', address='$address', so_status='$so_status' WHERE so_id='$so_id'");

header("location:../views/user/client/outbound_mng.php?page=1B");
?>