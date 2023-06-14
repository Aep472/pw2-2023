<?php
require_once '../koneksi.php';

$_id = $_GET['id'];

$sql = "SELECT * FROM `product` WHERE id=?";
$st = $dbh->prepare($sql);

$st->execute([$_id]);

$row = $st->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard | M-Store Admin</title>
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
                    <a class="btn btn-danger" href="list_product.php" role="button">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                    <form class="form-horizontal bg-primary text-white my-5 p-4 border shadow-sm rounded-4 w-md-50 mx-auto">
                        <h1 class="text-center mb-3">View Product</h1>
                        <div class="container px-3">
                            <div class="form-group row mb-3">
                                <label for="sku" class="col-4 col-form-label">SKU</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="sku" name="sku" type="text" class="form-control" value="<?php echo $row['sku']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="name" class="col-4 col-form-label">Name</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="name" name="name" type="text" class="form-control" value="<?php echo $row['name']; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="purchase_price" class="col-4 col-form-label">Purchase Price</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="purchase_price" name="purchase_price" class="form-control" value="<?php echo $row['purchase_price']; ?>" type="text" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="stock" class="col-4 col-form-label">Stock</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="stock" name="stock" class="form-control" value="<?php echo $row['stock']; ?>" type="text" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="min_stock" class="col-4 col-form-label">Minimum Stock</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="min_stock" name="min_stock" class="form-control" value="<?php echo $row['min_stock']; ?>" type="text" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="product_type_id" class="col-4 col-form-label">Produk ID</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="product_type_id" name="product_type_id" class="form-control" value="<?php echo $row['product_type_id']; ?>" type="text" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="restock_id" class="col-4 col-form-label">Restock ID</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="restock_id" name="restock_id" class="form-control" value="<?php echo $row['restock_id']; ?>" type="text" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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