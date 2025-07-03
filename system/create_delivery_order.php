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
       
    $row = $dbconnect->query("INSERT INTO delivery_order VALUES ('$po_id', '$po_no', '$fleet_type', '$tenant', '$loading_address', '$tenant_phone', '$pickup_date', '$destination_address', '$status')");

    header("location:../views/user/warehouse/delivery_order.php?page=4A");
?> 