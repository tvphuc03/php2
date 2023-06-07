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
</head>
<link rel="stylesheet" href="./style.css">
<style>
    body {
        margin: 0;
        padding: 0;
    }

    header {
        width: 100%;
        height: 50px;
    }

    .header_nav {
        display: flex;
        justify-content: space-between;
        max-width: 90%;
        margin: 0 auto;
        margin-top: 20px;
    }

    .header_logo>a {
        text-decoration: none;
        color: black;
    }

    .header_user {
        display: flex;
        margin: auto 0;
    }

    .header_user>a {
        text-decoration: none;
        color: black;
        margin: auto 5px;
    }

    .img-user {
        width: 40px;
        height: 40px;
        border-radius: 100%;

    }

    .name_user {
        max-width: 70px;
        font-weight: bold;
        margin: 0;
        float: left;
    }

    .sub-menu {
        display: inline;
        list-style: none;
        position: relative;
        padding: 0;
    }

    .sub-menu>li {
        min-width: 80px;
        height: 30px;
        list-style-type: none;
        border-radius: 5px;
    }

    ul li:hover ul {
        display: block;
        /* background-color: black; */
        /* border: 1px solid; */
        position: absolute;
        z-index: 1111;
        margin: 30px 0px 0px 0px;
    }

    ul li ul {
        display: none;
        padding: 0;
        width: 100px;
    }

    ul li ul li {
        height: 40px;
        margin: 8px 0;
        border: 1px solid;
        list-style-type: none;
        background-color: black;
        line-height: 40px;
        text-align: center;
        border-radius: 5px;
    }

    a {
        text-decoration: none;
        color: white;
    }

    #tamgiac {
        position: absolute;
        left: 10.5%;
        width: 0px;
        height: 0px;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 8px solid black;
        /* Tam giác phía trên được đổ màu */
    }
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.sesion{
    width: 95%;
    height: 100%;
    
}
h4{
    text-align: center;
}
h6 a{
    padding: 1rem;
    text-align: center;
    text-decoration: none;
}
.left{
    padding: 1rem;
    text-align: left;
    color: white;
    width: 100%;
    height: auto;
    min-height: 100vh;
    background-color:#023432 ;
}
.left a{
    color: white;
}
ul li{
    margin: 14px 0;
}


    .footer {
        width: 100%;
        height: auto;
    }
</style>

<body>

    <header>
        <div class="header_nav">
            <div class="header_logo">
                <h2>G4 ADMIN</h2>
            </div>
            <div class="header_user">
                <ul class="sub-menu">
                    <li><i class='bx bxs-user float-start mt-1 me-2'></i>
                        <a style="text-decoration: none;color: black;" class="name_user">Phúc</a>
                        <ul>
                            <div id="tamgiac"></div>
                            <li>
                                <a href="#">Đăng Xuất</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </header>

    <div class="sesion bg-white shadow-none">
        <div class="row">
            <div class="col-3">
                <div class="left">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="?act=home"><i class='bx bxs-home-alt-2'></i> Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>thuonghieu"><i class='bx bxs-purchase-tag-alt'></i> Thương Hiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>product"><i class='bx bxs-box'></i> Sản Phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url?>baiviet"><i class='bx bx-news'></i> Bài Viết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?act=listbl"><i class='bx bxs-comment'></i> Bình Luận</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>signup"><i class='bx bxs-user'></i> Tài Khoản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?act=listph"><i class='bx bxs-envelope'></i> Phản Hồi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?act=listbill"><i class='bx bxs-cart'></i> Đơn Hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?act=thongke"><i class='bx bx-bar-chart-alt-2'></i> Thống kê</a>
                        </li>
                    </ul>
                    <hr>
                    <h6><a href="../index.php?act=trangchu"><i class='bx bxs-left-arrow'></i>Quay Lại Trang Web</a></h6>
                </div>
            </div>
            <div class="col-9 ">
                {{content}}
            </div>
        </div>
    </div>
    <div class="footer">
        <footer class="mt-2 bg-dark text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3 text-white">
                © 2022 Copyright:
                <a class="text-white" href="../index.php">G4</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>


</body>

</html>