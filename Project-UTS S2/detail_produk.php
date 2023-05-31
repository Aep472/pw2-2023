<?php
require_once 'page/koneksi.php';
include_once 'template/header.php';
include_once 'template/navbar.php';

$id_ = $_GET['id'];

$sql = "SELECT * FROM product
        WHERE product.id=?";
$stmt = $dbh->prepare($sql);
$stmt->execute([$id_]);
$rs = $stmt->fetch(PDO::FETCH_ASSOC);
?>




<body>
    <section class="my-5 mt-5 mb-5">
        <h2 class="text-center fw-bold">Detail Produk</h2>
        <div class="underline mb-5" style="border-bottom: 5px solid #cc7722;widht-max: 80px;margin: 0 580px 0 580px;"></div>
        <div class="detail container py-4 my-4 mx-auto rounded-4 d-flex flex-column fw-bold py-3 px-5" style="background: linear-gradient(to bottom, #0072bb, #cc7722);color:white;">
            <div class="header">
                <div class="row">
                    <div class="col-md-9 p-2">
                        <div class="p-1" style="width: fit-content;">
                            <h2 class="m-1">
                                <?= $rs['name']; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-3 p-2 text-right text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="ms-2 p-1" style="width: fit-content;">
                        <h4 class="m-1">Rp. <?= $rs['purchase_price']; ?></h4>
                    </div>
                </div>
            </div>
            <div class="container-body mt-4">
                <div class="row">
                    <div class="col-md-6 px-md-5 py-5 m-2 >
                        <ul class=" mx-md-5">
                        <li>100% Quality</li>
                        <li>Free Shipping</li>
                        <li>Easy Returns</li>
                        <li>12 Months Warranty</li>
                        <li>EMI Starting from (On Credit Cards)</li>
                        <li>Normal Delivery : 4-5 Days</li>
                        <li>Express Delivery : 2-3 Days</li>
                        <li>COD Available (All Over India)</li>
                        </ul>
                    </div>
                    <div class="col-md-5 ms-md-5 m-2"><img src="assets/img/produk.jpg" class="ms-md-5 rounded-2 shadow" width="90%"> </div>
                </div>
            </div>
            <div class="footer d-flex flex-column mt-5">
                <div class="row r4">
                    <div class="col-md-2">
                        <p class="fw-bold text-white">Description</p>
                    </div>
                    <div class="col-md-2">
                        <p class="fw-bold text-white">Review</p>
                    </div>
                    <div class="col-md-2 offset-md-4 pt-2"><a class="btn btn-danger fw-bold" href="#">ADD TO CART</a></div>
                    <div class="col-md-2 pt-2"><a type="button" class="btn btn-success fw-bold">BUY NOW</a></div>
                </div>
            </div>
    </section>

    <?php
    include_once 'template/footer.php';
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/assets/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/js/bootstrap.min.js" integrity="sha512-eHx4nbBTkIr2i0m9SANm/cczPESd0DUEcfl84JpIuutE6oDxPhXvskMR08Wmvmfx5wUpVjlWdi82G5YLvqqJdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>