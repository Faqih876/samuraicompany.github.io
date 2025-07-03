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
       
    $row = $dbconnect->query("INSERT INTO inbound_mng VALUES ('$smu_id', '$smu_no', '$shipment_date', '$tenant', '$sku_no', '$quantity', '$expired_date', '$manufacturing_date', '$order_status')");

    header("location:../views/user/client/inbound_mng.php?page=1A");
?> 