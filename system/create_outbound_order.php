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
       
    $row = $dbconnect->query("INSERT INTO outbound_mng VALUES ('$so_id', '$so_no', '$tenant', '$sku_no', '$category', '$quantity', '$address', '$so_status')");

    header("location:../views/user/client/outbound_mng.php?page=2A");
?>