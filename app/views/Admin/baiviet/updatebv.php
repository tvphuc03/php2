<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>
        .btnadd {
            width: 120px;
            height: 34px;
            border-radius: 40px;
            border: none;
            background-color: #0d6efd;
            color: white;
        }

        .btnds {
            text-decoration: none;
            border-radius: 40px;
            background-color: #0d6efd;
            color: white;
            padding: 7px 25px;
        }

        .btnds:hover {
            background-color: #0a58ca;
            color: white;
        }

        .btnadd:hover {
            background-color: #0a58ca;
        }
    </style>
</head>

<body>
    <?php
    foreach ($data as $key => $value) {
    ?>
        <?php
        $hinhpath = "public/images/tintuc/" . $value["HinhAnh"];
        if (is_file($hinhpath)) {
            $hinh = "<img src='" . $hinhpath . "' height='40px'>";
        } else {
            $hinh = "Chưa có ảnh";
        }
        ?>
        <div class="container">
            <form  method="POST" enctype="multipart/form-data">
                <div class="row mt-2">
                    <div class="col">
                        <label for="" class="form-label">Mã bài viết:</label>
                        <input type="text" class="form-control" placeholder="<?php echo $data[0]["MaBV"] ?>" disabled>

                    </div>
                    <div class="col">
                        <label for="" class="form-label">Tên bài viết:</label>
                        <input type="text" class="form-control" value="<?php echo $data[0]["TenBV"] ?>" name="txtTenBV">
                    </div>
                </div>
                <div class="row mt-2">

                    <div class="col">
                        <label for="" class="form-label">Tài Khoản:</label>
                        <input type="text" class="form-control" placeholder="<?php echo $data[0]["TaiKhoan"] ?>" name="txtTK">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Tiêu Đề:</label>
                        <input type="text" class="form-control" value="<?php echo $data[0]["TieuDe"] ?>" name="txtTD">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <label for="" class="form-label">Hình ảnh cũ:</label>

                        <?php echo $hinh ?>
                        <br>
                        <label for="" class="form-label">Hình ảnh mới:</label>
                        <input type="file" class="form-control" name="FileHinh">
                    </div>
                    <div class="col">
                        <label class="mt-4" for="" class="form-label">Ngày nhập:</label>
                        <input type="date" class="form-control" value="<?php echo $NgayNhap ?>" name="txtNgay">
                    </div>
                </div>
            <?php
        }
            ?>
            <div class="row mt-2">

                <div class="col">
                    <label for="comment">Nội dung:</label>
                    <input type="text" class="form-control nd" value="<?php echo $data[0]["NoiDung"] ?>" name="txtND">
                </div>
            </div>
            <br>
            <button name="updatebv" class="btnadd">Cập nhật</button>
            <button type="reset" class="btnadd">Nhập lại</button>
            <a href="<?php echo base_url ?>baiviet" class="btnds">Danh sách</a>
            </form>
</body>

</html>