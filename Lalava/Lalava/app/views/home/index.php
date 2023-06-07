<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="./public/css/style.css">
<div class="banner">
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./public/images/banner/1.jpg" alt="Los Angeles" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./public/images/banner/2.jpg" alt="Chicago" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./public/images/banner/3.jpg" alt="New York" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./public/images/banner/4.jpg" alt="New York" class="d-block w-100">
            </div>
        </div>
        <style>
            .carousel-inner img {
                width: 100%;
                height: 600px;
            }
        </style>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>
<div class="container anh d-flex justify-content-center">
    <a href=""><img src="./public/images/thuonghieu/1.webp" alt="1"></a>
    <a href=""><img src="./public/images/thuonghieu/2.webp" alt="2"></a>
    <a href=""><img src="./public/images/thuonghieu/3.webp" alt="3"></a>
    <a href=""><img src="./public/images/thuonghieu/4.webp" alt="4"></a>
    <a href=""><img src="./public/images/thuonghieu/5.webp" alt="5"></a>
</div>
<div class="section">
    <h3>
        <hr>
        <a href="">Sản Phẩm Mới</a>
    </h3>
    <div class="row1">
        <section class="main">
            <div class="row">
                <?php
                foreach ($data as $key => $value) { ?>
                    <div class="col-lg-3 col-md-12 mb-4 chitiet">
                        <div class="card product">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                                <img src="./public/images/sanpham/<?php echo $value['HinhAnh'] ?>" class="w-100">
                                <a href="#!">
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset ten">
                                    <h5 class="card-title mb-3 "><?php echo $value['TenSP'] ?></h5>
                                </a>
                                <div class="row">
                                    <p class="col-6 card-text"><?php echo $value['GiaCu'] ?><u>đ</u></p>
                                </div>

                            </div>
                        </div>
                        <div class="zone">
                            <button class="btn-them"><a class="text-decoration-none " href="index.php?act=ctsp&id=<?php echo $MaSP ?>">Chi tiết sản phẩm</a></button>
                        </div>
                    </div>
                <?php
                }
                ?>
                <!-- end4 -->
            </div>
        </section>
    </div>
    <div class="all">
        <a href="index.php?act=showall_spm" class="btn-all">Xem Tất Cả -&nbsp<strong>Sản Phẩm Mới</strong></a>
    </div>
</div>

<div class="section">
    <h3>
        <hr>
        <a href="">Sản Phẩm Nổi Bật</a>
    </h3>
    <div class="row1">
        <section class="main">
            <div class="row">
                <?php
                foreach ($data as $key => $value) { ?>
                    <div class="col-lg-3 col-md-12 mb-4 chitiet">
                        <div class="card product">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                                <img src="./public/images/sanpham/<?php echo $value['HinhAnh'] ?>" class="w-100" />
                                <a href="#!">
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset ten">
                                    <h5 class="card-title mb-3 "><?php echo $value["TenSP"] ?></h5>
                                </a>
                                <div class="row">
                                    <p class="col-6 card-text"> <?php echo $value["GiaCu"] ?><u>đ</u></p>
                                </div>
                            </div>
                        </div>
                        <div class="zone">
                            <button class="btn-them"><a class="text-decoration-none " href="index.php?act=ctsp&id=<?php echo $MaSP ?>">Chi tiết sản phẩm</a></button>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </section>
    </div>
    <div class="all">
        <a href="index.php?act=showall_spnb" class="btn-all">Xem Tất Cả -&nbsp<strong>Sản Phẩm Nổi Bật</strong></a>
    </div>
</div>


<div class="section">
    <h3>
        <hr>
        <a href="">Sản Phẩm Khuyến Mãi</a>
    </h3>
    <div class="row1">
        <section class="main">
            <div class="row">
                <?php
                foreach ($data as $key => $value) { ?>
                    <div class="col-lg-3 col-md-12 mb-4 chitiet">
                        <div class="card product">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                                <img src="./public/images/sanpham/48b28d5e91a3441d9f8eaea10148b109_9366.png" class="w-100" />
                                <a href="#!">
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset ten">
                                    <h5 class="card-title mb-3 "><?php echo $value["TenSP"] ?></h5>
                                </a>
                                <div class="row">

                                    <p class="col-6 card-text"> <del><?php echo $value["GiaCu"] ?><u>đ</u></del> - <span style="color:red ;"><?php echo $value["GiaMoi"] ?><u>đ</u> </span></p>
                                </div>
                            </div>
                        </div>
                        <div class="zone">
                            <button class="btn-them"><a class="text-decoration-none " href="index.php?act=ctsp&id=<?php echo $MaSP ?>">Chi tiết sản phẩm</a></button>
                        </div>
                        <div class="khuyenmai">
                            <?php
                            $khuyenmai = (($value["GiaCu"] - $value["GiaMoi"]) / $value["GiaMoi"] * 100);
                            echo round($khuyenmai) . "%";
                            ?>
                        </div>
                        <style>
                            .chitiet .khuyenmai {
                                position: absolute;
                                top: 0;
                                right: 0;
                                z-index: 1;
                                background-color: red;
                                color: white;
                                width: 50px;
                                height: 30px;
                                text-align: center;
                                line-height: 30px;
                                border-radius: 10px;
                                transform: rotate(30deg);
                            }
                        </style>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
    </div>
    <div class="all">
        <a href="index.php?act=showall_spkm" class="btn-all">Xem Tất Cả -&nbsp<strong>Sản Phẩm Khuyến Mãi</strong></a>
    </div>
</div>

<hr style="height: 2px;">
<div class="section" style="padding-bottom:30px;padding-top:0;">
    <h3>
        <hr>
        <a href="">Tin Tức & Khuyến Mãi</a>
    </h3>
    <br>
    <div class="row1">
        <div class="container">
            <div class="row gx-lg-5">
                <?php
                foreach ($data as $key => $value) { ?>
                    
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <a href="" class="text-dark">
                            <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
                                <img src="./public/images/tintuc/<?php echo $value["HinhAnh"] ?>" class="img-fluid" />
                            </div>
                            <h5 class="name-news"><?php echo $value["TieuDe"] ?></h5>
                            <div class="row">
                                <a href="" class="text-info">
                                    <i class='bx bxs-user'></i>
                                    Đăng bởi: <?php echo $value["TaiKhoan"] ?>
                                </a>
                            </div>
                            <p class="text-news">
                                <?php echo $value["NoiDung"] ?>
                            </p>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<style>
    .btn-them a {
        color: black;
    }

    .btn-them:hover a {
        color: #fff;
    }
</style>