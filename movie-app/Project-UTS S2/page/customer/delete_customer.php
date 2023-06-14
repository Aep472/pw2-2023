<?php
require_once '../koneksi.php';
$_id = $_GET['id'];
$sql = "DELETE FROM customer WHERE id = ?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
header('location:list_customer.php');
