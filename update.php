<?php 

require_once 'adapter.php';
require_once '../header.php';

$product_id = $_POST['product_id'];
$sku = $_POST['sku'];
$cost = $_POST['cost'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];
$color = $_POST['color'];
$material = $_POST['material'];

$query = "UPDATE `product` 
          SET `product_id`='$product_id',`sku`='$sku',`cost`='$cost',`price`='$price',`quantity`='$quantity',
          `status`='$status',`color`='$color',`material`='$material' 
          WHERE product_id=$product_id"; 

$adapter = new adapter();
$adapter->update($query);
header("Location:grid.php");
?>