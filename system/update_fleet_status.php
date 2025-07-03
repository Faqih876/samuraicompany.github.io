<?php 

include "../config/conn.php";

$plate_id = $_POST['plate_id'];
$no_plate = $_POST['no_plate'];
$fleet_type = $_POST['fleet_type'];
$driver_name = $_POST['driver_name'];
$driver_phone = $_POST['driver_phone'];
$fleet_location = $_POST['fleet_location'];
$surat_jalan = $_POST['surat_jalan'];
$flt_status = $_POST['flt_status'];

$row = $dbconnect->query("UPDATE fleet_status SET no_plate='$no_plate', fleet_type='$fleet_type', driver_name='$driver_name', driver_phone='$driver_phone', fleet_location='$fleet_location', surat_jalan='$surat_jalan', flt_status='$flt_status' WHERE plate_id='$plate_id'");

header("location:../views/user/transporter/fleet_status.php?page=3A");
?>