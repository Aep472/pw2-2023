<?php
require_once '../koneksi.php';

$order_number = $_POST['order_number'];
$date = $_POST['date'];
$qty = $_POST['qty'];
$total_price = $_POST['total_price'];
$customer_id = $_POST['customer_id'];
$product_id = $_POST['product_id'];

$process = $_POST['process'];

$ar_[] = $order_number;
$ar_[] = $date;
$ar_[] = $qty;
$ar_[] = $total_price;
$ar_[] = $customer_id;
$ar_[] = $product_id;

if ($process == "Tambah") {
    $sql = "INSERT INTO `order` (order_number,date,qty,total_price,customer_id,product_id) VALUES (?,?,?,?,?,?)";
} else if ($process == "Update") {
    $ar_[] = $_POST['id'];
    $sql = "UPDATE `order` SET order_number=?,date=?,qty=?,total_price=?,customer_id=?,product_id=? WHERE id=?";
}

if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_);
}

header('location:list_order.php');
