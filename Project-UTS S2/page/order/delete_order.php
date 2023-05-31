<?php
require_once '../koneksi.php';
$_id = $_GET['id'];
$sql = "DELETE FROM `order` WHERE id = ?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
header('location:list_order.php');
