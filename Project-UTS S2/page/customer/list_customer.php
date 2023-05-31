<?php
require_once '../koneksi.php';

$query = "SELECT customer.id,customer.name,customer.gender,customer.phone,customer.email,customer.address,card.name, customer.name AS csname, card.name AS cdname 
    FROM customer
    INNER JOIN `card` ON customer.card_id = card.id";
$data = $dbh->query($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once '../navbar.php'; ?>
    <div id="layoutSidenav">
        <?php include_once 'sidebar.php'; ?>

        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">Customer Page</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Customer</li>
                </ol>
                <a class="btn btn-success mb-4" href="form_customer.php" role="button">Tambah Customer</a>
                <div class="card py-2 px-2 mb-5">
                    <div class="card-body">
                        <div class="table-responsive custom-table-responsive rounded-2">
                            <table class="table custom-table table-bordered">
                                <thead class="text-center text-white bg-secondary">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Card</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <?php
                                $no = 1;
                                foreach ($data as $row) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $row['csname'] ?></td>
                                            <td><?= $row['gender'] ?></td>
                                            <td><?= $row['phone'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['address'] ?></td>
                                            <td><?= $row['cdname'] ?></td>
                                            <td class="align-item-center justify-content-center">
                                                <a class="btn btn-primary m-1" style="width: 40px;" href="view_customer.php?id=<?= $row['id'] ?>">
                                                    <i class="fa fa-eye"></i></a>
                                                <a class="btn btn-warning m-1" style="width: 40px;" href="form_customer.php?id=<?= $row['id'] ?>">
                                                    <i class="fa fa-pencil"></i></a>
                                                <a class="btn btn-danger m-1" style="width: 40px;" href="delete_customer.php?id=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['name'] ?>?')) {return false}">
                                                    <i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once '../footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../../assets/js/chart-area-demo.js"></script>
    <script src="../../assets/js/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="../../assets/js/datatables-simple-demo.js"></script>
</body>

</html>