<?php
require_once '../koneksi.php';
$_id = $_GET['id'];
$sql = "DELETE FROM product_type WHERE id = ?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
header('location:list_type.php');
