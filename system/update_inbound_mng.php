<?php 

include "../config/conn.php";

$smu_id = $_POST['smu_id'];
$smu_no = $_POST['smu_no'];
$shipment_date = $_POST['shipment_date'];
$tenant = $_POST['tenant'];
$sku_no = $_POST['sku_no'];
$quantity = $_POST['quantity'];
$expired_date = $_POST['expired_date'];
$manufacturing_date = $_POST['manufacturing_date'];
$order_status = $_POST['order_status'];


$row = $dbconnect->query("UPDATE inbound_mng SET smu_no='$smu_no', shipment_date='$shipment_date', tenant='$tenant', sku_no='$sku_no', quantity='$quantity', expired_date='$expired_date', manufacturing_date='$manufacturing_date', order_status='$order_status' WHERE smu_id='$smu_id'");

header("location:../views/user/warehouse/inbound_mng.php?page=1A");
?>