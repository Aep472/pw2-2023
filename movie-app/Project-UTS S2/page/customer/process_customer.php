<?php
require_once '../koneksi.php';

$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$card_id = $_POST['card_id'];

$process = $_POST['process'];

$ar_[] = $name;
$ar_[] = $gender;
$ar_[] = $phone;
$ar_[] = $email;
$ar_[] = $address;
$ar_[] = $card_id;

if ($process == "Tambah") {
    $sql = "INSERT INTO customer (name,gender,phone,email,address,card_id) VALUES (?,?,?,?,?,?)";
} else if ($process == "Update") {
    $ar_[] = $_POST['id'];
    $sql = "UPDATE customer SET name=?,gender=?,phone=?,email=?,address=?,card_id=? WHERE id=?";
}

if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_);
}

header('location:list_customer.php');
