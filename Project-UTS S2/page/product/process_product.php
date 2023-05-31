<?php
require_once '../koneksi.php';

$sku = $_POST['sku'];
$name = $_POST['name'];
$purchase_price = $_POST['purchase_price'];
$stock = $_POST['stock'];
$min_stock = $_POST['min_stock'];
$product_type_id = $_POST['product_type_id'];
$restock_id = $_POST['restock_id'];

$process = $_POST['process'];

$ar_[] = $sku;
$ar_[] = $name;
$ar_[] = $purchase_price;
$ar_[] = 1.2 * $purchase_price;
$ar_[] = $stock;
$ar_[] = $min_stock;
$ar_[] = $product_type_id;
$ar_[] = $restock_id;

if ($process == "Tambah") {
    $sql = "INSERT INTO product (sku,name,purchase_price,sell_price,stock,min_stock,product_type_id,restock_id) VALUES (?,?,?,?,?,?,?,?)";
} else if ($process == "Update") {
    $ar_[] = $_POST['id'];
    $sql = "UPDATE product SET sku=?,name=?,purchase_price=?,sell_price=?,stock=?,min_stock=?,product_type_id=?,restock_id=? WHERE id=?";
}

if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_);
}

header('location:list_product.php');
