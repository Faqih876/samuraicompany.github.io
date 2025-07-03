<?php
    include "../config/conn.php";

    $po_id = $_POST['po_id'];
    $fleet_type = $_POST['fleet_type'];
    $tenant = $_POST['tenant'];
    $loading_address = $_POST['loading_address'];
    $tenant_phone = $_POST['tenant_phone'];
    $pickup_date = $_POST['pickup_date'];
    $destination_address = $_POST['destination_address'];
    $status = $_POST['status'];
   
    $row = $dbconnect->query("INSERT INTO purch_order VALUES ('$po_id', '$fleet_type', '$tenant', '$loading_address','$pickup_date', '$destination_address', '$status')");

    header("location:../views/user/transporter/purch_order.php?page=4A");

?>
