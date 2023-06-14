<?php
include_once 'template/header.php';
require_once 'page/koneksi.php';
include_once 'template/navbar.php';
?>

<?php
$sql = "SELECT product.id,product.sku,product.name,product.purchase_price,product.sell_price,product.stock,product.min_stock,product.product_type_id,product.restock_id
        FROM product
        INNER JOIN product_type ON product.product_type_id=product_type.id";
$rs = $dbh->query($sql);
?>
<style>
    /* Gaya untuk judul section */
    #produk h2 {
        font-weight: bold;
        font-size: 2.5rem;
        margin-bottom: 2rem;
    }

    /* Gaya untuk card produk */
    .card {
        border: none;
        box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);
        transition: box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        padding: 1.5rem;
    }

    .card-title {
        font-size: 1.2rem;
        margin-bottom: 1rem;
    }

    .card-text {
        font-size: 1rem;
        color: #777;
        margin-bottom: 1.5rem;
    }
</style>

<body>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background:linear-gradient(to bottom, #0072bb, #cc7722),url('assets/img/carousel.jpg') center/cover no-repeat;background-blend-mode: multiply;">
                <div class="carousel-caption py-md-5 my-md-5 d-block">
                    <h2 class="bold my-4 text-warning">Alat Dapur</h2>
                    <p class="text-wrap my-4">Dengan banyaknya pilihan yang tersedia, kami yakin bahwa Anda dapat menemukan produk <br> sesuai dengan kebutuhan memasak Anda.</p>
                    <a class="btn btn-primary py-sm-3 px-sm-3 fw-bolder bg-blue" href="">Cek Produk</a>
                </div>
            </div>
            <div class="carousel-item" style="background:linear-gradient(to bottom, #0072bb, #cc7722),url('assets/img/carousel.jpg') center/cover no-repeat;background-blend-mode: multiply;">
                <div class="carousel-caption py-md-5 my-md-5 d-block">
                    <h2 class="bold my-4 text-warning">Pelayanan Baik</h2>
                    <p class="text-wrap my-4">Kami juga menawarkan harga yang terjangkau sehingga Anda dapat membeli produk <br> berkualitas tanpa harus mengeluarkan banyak uang.</p>
                    <a class="btn btn-primary py-sm-3 px-sm-3 fw-bolder bg-blue" href="">Cek Produk</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon rounded-circle p-4 bg-cream" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon rounded-circle p-4 bg-cream" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-fluid banner pt-lg-0">
        <div class="container py-2 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 my-2 wow fadeIn" data-wow-delay="0.5s" style="min-height: 160px;">
                    <a href="" style=" text-decoration: none;">
                        <div class="rounded-5 m-md-1 d-flex align-items-center h-100 px-5" style="background:linear-gradient(to bottom, #0072bb, #cc7722), url('assets/img/b-1.jpg') center/ cover no-repeat;background-blend-mode: multiply;">
                            <div class="mx-auto">
                                <div class="text-center" style="width: max-content;">
                                    <h1 class="text center text-white">Kuat</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 my-2 wow fadeIn" data-wow-delay="0.5s" style="min-height: 160px;">
                    <a href="" style="text-decoration: none;">
                        <div class="rounded-5 m-md-1 d-flex align-items-center h-100 px-5" style="background:linear-gradient(to bottom, #0072bb, #cc7722), url('assets/img/b-2.jpg') center/ cover no-repeat;background-blend-mode: multiply;">
                            <div class="mx-auto">
                                <div class="text-center" style="width: max-content;">
                                    <h1 class="text center text-white">Highggenis</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 my-2 wow fadeIn" data-wow-delay="0.5s" style="min-height: 160px;">
                    <a href="" style="text-decoration: none;">
                        <div class="rounded-5 m-md-1 d-flex align-items-center h-100 px-5" style="background:linear-gradient(to bottom, #0072bb, #cc7722), url('assets/img/b-3.jpg') center/ cover no-repeat;background-blend-mode: multiply;">
                            <div class="mx-auto">
                                <div class="text-center" style="width: max-content;">
                                    <h1 class="text center text-white">Murah</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section id="produk" class="container-fluid my-5 py-3">
        <div class="container">
            <h2 class="text-center">Produk Kami</h2>
            <div class="underline mb-5" style="border-bottom: 5px solid #cc7722;margin: 0 450px 0 450px;"></div>
            <div class="row justify-content-center">
                <?php
                $no = 1;
                foreach ($rs as $row) {
                ?>
                    <div class="col-sm-4 mb-4">
                        <div class="card m-3">
                            <a href="detail_produk.php?id=<?= $row['id'] ?>">
                                <img src="assets/img/produk.jpg" class="card-img-top" alt="Produk 1">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-dark fw-bold my-3"><?= $row['name']; ?>
                                    </h5>
                                    <h6 class="card-price text-dark my-4 ">Rp. <?= $row['purchase_price'] ?>
                                    </h6>
                                    <div class="text-warning my-3">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <a href="detail_produk.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-block">Beli Sekarang</a>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
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