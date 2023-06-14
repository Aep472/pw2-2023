<?php
require_once '../koneksi.php';

$_id = isset($_GET['id']) ? $_GET['id'] : null;
if (!empty($_id)) {
    $sql = "SELECT * FROM customer WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
} else {
    $row = [];
}
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
                    <h1 class="mt-4">Customer Page</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Customer</li>
                    </ol>
                    <a class="btn btn-danger" href="list_customer.php" role="button">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                    <form class="form-horizontal bg-primary text-white my-5 p-4 border shadow-sm rounded-4 mx-auto w-md-75" method="POST" action="process_customer.php">
                        <h1 class="text-center mb-3">Tambah/Edit Customer</h1>
                        <div class="container px-3">
                            <div class="form-group row mb-3">
                                <label for="name" class="col-4 col-form-label">Name</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="name" name="name" type="text" class="form-control" value="<?php if (isset($row['name'])) echo $row['name']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="gender" class="col-4 col-form-label">Gender</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <select id="gender" name="gender" class="form-select">
                                            <option value="L">L</option>
                                            <option value="P">P</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="phone" class="col-4 col-form-label">Phone</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="phone" name="phone" value="<?php if (isset($row['phone'])) echo $row['phone']; ?>" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="email" class="col-4 col-form-label">Email</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="email" name="email" value="<?php if (isset($row['email'])) echo $row['email']; ?>" type="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="address" class="col-4 col-form-label">Alamat</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="address" name="address" value="<?php if (isset($row['address'])) echo $row['address']; ?>" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="product" class="col-4 col-form-label">Card Name</label>
                                <div class="col-8">
                                    <?php
                                    $queryc = "SELECT * FROM card";
                                    $rsc = $dbh->query($queryc);
                                    ?>
                                    <select id="card_id" name="card_id" class="form-select">
                                        <?php
                                        foreach ($rsc as $rowc) {
                                        ?>
                                            <option value="<?= $rowc['id'] ?>"><?= $rowc['name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <?php
                                $button = (empty($_id)) ? "Tambah" : "Update";
                                ?>
                                <input type="submit" name="process" type="submit" class="btn btn-success" value="<?= $button ?>" />
                                <input type="hidden" name="id" value="<?= $_id ?>" />
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