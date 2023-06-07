<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<style>
        .btnadd {
            width: 120px;
            height: 34px;
            border-radius: 40px;
            border: none;
            background-color: #0d6efd;
            color: white;
        }
        .btnds{
            text-decoration: none;
            border-radius: 40px;
            background-color: #0d6efd;
            color: white;
            padding: 7px 25px;
        }
        .btnds:hover{
            background-color: #0a58ca;
            color: white;
        }
        .btnadd:hover{
            background-color: #0a58ca;
        }
    </style>
<body>
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <div class="row mt-2">
                <div class="col">
                    <label for="" class="form-label">Mã Bài Viết:</label>
                    <input type="hidden" class="form-control" name="txtMaBV">
                    <input type="text" class="form-control" placeholder="Mã bài viết" disabled>
                </div>
                <div class="col">
                    <label for="" class="form-label">Tên Bài Viết:</label>
                    <input type="text" class="form-control" placeholder="Tên bài viết" name="txtTenBV">
                </div>
            </div>
            <div class="row mt-2">
                    
                <div class="col">
                <input type="hidden" class="form-control" name="txtMaTK" value="<?php echo $_SESSION['TaiKhoan']['MaTK']?>">
                    <label for="" class="form-label">Tài Khoản:</label>
                    <input class="form-control" name="txtTK" value="" placeholder="Tài Khoản">
                </div>
                <div class="col">
                <label for="" class="form-label">Hình ảnh:</label>
                    <input type="file" class="form-control" name="FileHinh">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label for="" class="form-label">Tiêu đề:</label>
                    <input type="text" class="form-control" placeholder="Tiêu đề bài viết" name="txtTD">
                </div>
                <div class="col">
                    <label for="" class="form-label">Ngày nhập:</label>
                    <input type="date" class="form-control" placeholder="Ngày nhập" name="txtNgay">
                </div>
            </div>
            <div class="row">
                <label for="comment">Nội dung:</label>
                <textarea class="form-control" rows="20" name="txtND"></textarea>
            </div>
            <br>
            <button name="addbv" class="btnadd">Thêm mới</button>
            <button type="reset" name="btnNL" class="btnadd">Nhập lại</button>
            <a href="<?php echo base_url?>baiviet" class="btnds">Danh sách</a>
        </form>
    </div>

</body>

</html>