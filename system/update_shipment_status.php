<?php 

include "../config/conn.php";

$shipment_id = $_POST['shipment_id'];
$no_plate = $_POST['no_plate'];
$fleet_type = $_POST['fleet_type'];
$no_surat = $_POST['no_surat'];
$po_no = $_POST['po_no'];
$fleet_location = $_POST['fleet_location'];
$surat_jalan = $_POST['surat_jalan'];
$shp_status = $_POST['shp_status'];
$plate_id = $_POST['plate_id'];

$row = $dbconnect->query("UPDATE shipment_status SET no_plate='$no_plate', fleet_type='$fleet_type', no_surat='$no_surat', po_no='$po_no', fleet_location='$fleet_location', surat_jalan='$surat_jalan', shp_status='$shp_status', plate_id='$plate_id' WHERE plate_id='$plate_id'");

header("location:../views/user/transporter/shipment_status.php?page=2A");
?>