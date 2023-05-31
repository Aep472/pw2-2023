<?php
require_once '../koneksi.php';

$query = "SELECT product.id,product.sku,product.name,product.purchase_price,product.sell_price,product.stock,product.min_stock, product_type.name,restock.restock_number,
product_type.name AS tname, product.name AS pname FROM product INNER JOIN product_type ON product.product_type_id=product_type.id INNER JOIN restock ON product.restock_id=restock.id";
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
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Produk Page</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Produk</li>
                    </ol>
                    <a class="btn btn-success mb-4" href="form_product.php" role="button">Tambah Produk</a>

                    <div class="card py-0 px-0 mb-5">
                        <div class="card-body">
                            <div class="table-responsive custom-table-responsive rounded-2">
                                <table class="table custom-table table-bordered">
                                    <thead class="text-center text-white bg-secondary">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">SKU</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Purchase Price</th>
                                            <th scope="col">Sell Price</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Minimum Stock</th>
                                            <th scope="col">Product Type</th>
                                            <th scope="col">Restock ID</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $no = 1;
                                    foreach ($data as $row) {
                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['sku'] ?></td>
                                                <td><?= $row['pname'] ?></td>
                                                <td><?= $row['purchase_price'] ?></td>
                                                <td><?= $row['sell_price'] ?></td>
                                                <td><?= $row['stock'] ?></td>
                                                <td><?= $row['min_stock'] ?></td>
                                                <td><?= $row['tname'] ?></td>
                                                <td><?= $row['restock_number'] ?></td>
                                                <td>
                                                    <a class="btn btn-primary" style="width: 42px;margin: 1px;" href="view_product.php?id=<?= $row['id'] ?>">
                                                        <i class="fa fa-eye"></i></a>
                                                    <a class="btn btn-warning" style="width: 42px;margin: 1px;" href="form_product.php?id=<?= $row['id'] ?>">
                                                        <i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger" style="width: 42px;margin: 1px;" href="delete_product.php?id=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['name'] ?>?')) {return false}">
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
            </main>
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