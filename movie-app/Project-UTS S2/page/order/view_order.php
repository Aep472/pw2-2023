<?php
require_once '../koneksi.php';

$_id = $_GET['id'];

$sql = "SELECT * FROM `order` WHERE id=?";
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
    <title>Dashboard | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include_once '../navbar.php' ?>
    <div id="layoutSidenav">
        <?php include_once 'sidebar.php' ?>

        <div id="layoutSidenav_content">
            <div class="container-fluid">
                <h1 class="mt-4">Order Page</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Order</li>
                </ol>
                <a class="btn btn-danger" href="list_order.php" role="button">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
                <form class="form-horizontal bg-primary text-white my-5 p-4 border shadow-sm rounded-4 w-md-50 mx-auto">
                    <h1 class="text-center mb-3">View Order</h1>
                    <div class="container px-3">
                        <div class="form-group row mb-3">
                            <label for="order_number" class="col-4 col-form-label">Order Number</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="order_number" name="order_number" type="text" class="form-control" value="<?php echo $row['order_number']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="date" class="col-4 col-form-label">Tanggal</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="date" name="date" type="datetime-local" class="form-control" value="<?php echo $row['date']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="qty" class="col-4 col-form-label">Quantity</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="qty" value="<?php echo $row['qty']; ?>" disabled type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="total_price" class="col-4 col-form-label">Total Price</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="total_price" name="total_price" value="<?php echo $row['total_price']; ?>" disabled type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="customer_id" class="col-4 col-form-label">Customer ID</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="customer_id" name="customer_id" type="text" class="form-control" value="<?php echo $row['customer_id']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="product_id" class="col-4 col-form-label">Product ID</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="product_id" name="product_id" type="text" class="form-control" value="<?php echo $row['product_id']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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