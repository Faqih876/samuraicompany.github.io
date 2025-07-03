<?php 

include "../config/conn.php";

$po_id = $_POST['po_id'];
$po_no = $_POST['po_no'];
$fleet_type = $_POST['fleet_type'];
$tenant = $_POST['tenant'];
$loading_address = $_POST['loading_address'];
$tenant_phone = $_POST['tenant_phone'];
$pickup_date = $_POST['pickup_date'];
$destination_address = $_POST['destination_address'];
$status = $_POST['status'];

$row = $dbconnect->query("UPDATE delivery_order SET po_no='$po_no', fleet_type='$fleet_type', tenant='$tenant', loading_address='$loading_address', tenant_phone='$tenant_phone', pickup_date='$pickup_date', destination_address='$destination_address', status='$status' WHERE po_id='$po_id'");

header("location:../views/user/transporter/purch_order.php?page=4A");
?>