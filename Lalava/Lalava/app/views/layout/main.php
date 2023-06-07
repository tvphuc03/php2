<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <header class="text-center text-lg-start bg-dark text-light">
    <ul class="container nav justify-content-end sub-menu sm-bm">
      <li class="nav-item">
        <p class="nav-link text-white" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
            </path>
            <path d="M15 7a2 2 0 0 1 2 2"></path>
            <path d="M15 3a6 6 0 0 1 6 6"></path>
          </svg>
          0358959353
        </p>
      </li>
      <li class="nav-item">
        <p class="nav-link text-white" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
            <polyline points="3 7 12 13 21 7"></polyline>
          </svg>
          phuctvps22224@fpt.edu.vn
        </p>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php?act=viewcart">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="6" cy="19" r="2"></circle>
            <circle cx="17" cy="19" r="2"></circle>
            <path d="M17 17h-11v-14h-2"></path>
            <path d="M6 5l14 1l-1 7h-13"></path>
          </svg>
          Giỏ hàng(0)
        </a>
      </li>


      <li class="nav-item sub mt-1" style="list-style-type: none;">

        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <circle cx="12" cy="7" r="4"></circle>
          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
        </svg>
        <ul>
          <?php
          // include_once "Global.php";
          if (isset($_SESSION['signup'])) {
            extract($_SESSION['signup']);
          ?>
            <?php if ($phanquyen == 1) {
            ?>
              <li><a href=" <?php echo $url ?>">Quản lí Website</a></li>
            <?php
            }
            ?>
            <li><a href="<?php echo base_url?>thuonghieu">Quản lí tài khoản</a></li>
            <li><a href="index.php?act=dangxuat">Đăng xuất</a></li>
          <?php
          } else {
          ?>
            <li><a href="<?php base_url?>login">Đăng nhập</a></li>
            <li><a href="<?php base_url?>dangki">Đăng kí</a></li>
          <?php
          }
          ?>
        </ul>
      </li>
    </ul>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand mx-auto" href="?act=trangchu"><img style="width: 50%;" src="./Img/logo/g4trang.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-3">
              <a class="nav-link text-uppercase fw-bold" href="<?php echo base_url?>">Trang chủ</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link text-uppercase fw-bold" href="index.php?act=sanpham">Sản Phẩm</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link text-uppercase fw-bold" href="index.php?act=tintuc">Tin Tức</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link text-uppercase fw-bold" href="javascript:void(0)">Giới Thiệu</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link text-uppercase fw-bold" href="?act=lienhe">Liên Hệ</a>
            </li>
          </ul>
          <form action="index.php?act=sanpham" method="POST" class="d-flex">
            <input class="form-control me-2" type="text" name="kyw" placeholder="Tìm kiếm..." style="width: 300px;">
            <button type="submit" name="listok" class="btn btn-primary"><i class='bx bx-search-alt-2'></i>
            </button>
          </form>
        </div>
      </div>
    </nav>
  </header>


  {{content}}
  <footer class="text-center text-lg-start bg-dark p-3 text-light">
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-sm-3  col-lg-2 col-xl-1 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              SOTRE G4
            </h6>
            <p>
              Trang chủ
            </p>
            <p>Giới thiệu</p>
            <p>Sản Phẩm</p>
            <p>Tin tức</p>
            <p>Liên hệ</p>
          </div>
          <div class="col-md-3 col-sm-4  col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              ĐIỀU KHOẢN SỬ DỤNG
            </h6>
            <p>
              Điều khoản chung
            </p>
            <p>
              Điều khoản giao dịch
            </p>
            <p>
              Chính sách thanh toán
            </p>
            <p>
              Chính sách bảo mật
            </p>
            <p>
              Câu hỏi thường gặp
            </p>
          </div>
          <div class="col-md-4 col-sm-6 col-lg-3 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase mx-5 fw-bold mb-4">
              Kết nối với chúng tôi
            </h6>
            <div class="container mxh">
              <div class="row">
                <p class="col">
                  <a href="#!" class="text-reset"><img src="./Img/footer/facebook.png" alt=""></a>
                </p>
                <p class="col">
                  <a href="#!" class="text-reset"><img src="./Img/footer/Instar.png" alt=""></a>
                </p>
                <p class="col">
                  <a href="#!" class="text-reset"><img src="./Img/footer/Youtube.png" alt=""></a>
                </p>
              </div>
              <div class="row">
                <p class="col">
                  <a href="#!" class="text-reset"><img src="./Img/footer/twiter.png" alt=""></a>
                </p>
                <p class="col">
                  <a href="#!" class="text-reset"><img src="./Img/footer/tiktok.png" alt=""></a>
                </p>
                <p class="col">
                  <a href="#!" class="text-reset"><img src="./Img/footer/printes.png" alt=""></a>
                </p>
              </div>
            </div>

          </div>
          <div class="col-md-2 col-sm-6  col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Chăm sóc khách hàng</h6>
            <p>Hotline: 0358959353</p>
            <p>
              Giờ làm việc: 8h-22h(Tất cả các ngày bao gồm cả các dịp lễ)
            </p>
            <p>Email hỗ trợ: StoreG4@gmail.com</p>
          </div>
        </div>
      </div>
    </section>
    <div class="text-end p-4">
      Copyright 2022 ©:
      <a class="text-reset fw-bold" href="">G4</a>
    </div>

  </footer>



</body>

</html>
<style>
  .sub {
    list-style-type: none;
    border-radius: 5px;
    /* background-color: red; */
    position: relative;
  }

  .sub:hover ul {
    width: 100px;
    min-height: 60px;
    z-index: 1111;
    /* margin: 30px 0px 0px 0px; */
    /* background-color: white; */
    display: block;
  }

  .sub ul {
    border-radius: 5px;
    display: none;
    background-color: white;
    position: absolute;
    padding: 0;
    margin-top: 10px;
    min-width: 150px;
    margin-left: -30px;
  }

  .sub ul li {
    min-width: 150px;
    list-style-type: none;
  }

  .sub ul li a {
    color: black;
    text-decoration: none;
    margin-left: 5px;
  }

  @media (max-width: 575.98px) {
    .sm-bm {
      display: none;
    }
  }

  @media (max-width: 768px) {
    .sm-bm {
      display: none;
    }
  }

  /* css footer */
  footer img {
    width: 30px;
    float: left;
  }

  @media (max-width: 575.98px) {
    .mxh {
      width: 50%;
    }
  }

  @media (min-width: 768px) {
    .mxh {
      width: 90%;
    }
  }

  @media (min-width: 1200px) {
    .mxh {
      width: 80%;
    }
  }

  @media (min-width: 1400px) {
    .mxh {
      width: 70%;
    }
  }

  /* end css footer */
</style>