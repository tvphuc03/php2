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
    .ip_search {
      width: 340px;
      height: 34px;
      border-radius: 40px;
      padding-left: 20px;
    }

    .list_loai {
      width: 80px;
      height: 34px;
      border-radius: 40px;
    }

    .ip_loc {
      width: 60px;
      height: 34px;
      border-radius: 40px;
      border: none;
      background-color: #0d6efd;
      color: white;
    }

    .ip_loc:hover {
      background-color: #0a58ca;
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

    form {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="container mt-3 text-center">
      <h2>DANH SÁCH BÀI VIẾT</h2>
      <form action="index.php?act=listbv" method="post">
        <input type="text" name="kyw" class="ip_search" placeholder="Tìm kiếm.....">
        <input name="listok" type="submit" value="Lọc" class="ip_loc">
      </form>
      <table class="table table-bordered">
        <thead>
          <tr>
          <tr>
            <th>Mã Bài Viết</th>
            <th>Tên Bài Viết</th>
            <th>Tài Khoản</th>
            <th>Ảnh Bài Viết</th>
            <th>Tiêu Đề</th>
            <th>Nội Dung</th>
            <th>Ngày Nhập</th>
            <th colspan="2">Hành Động</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($data as $key => $value) { ?>
            <?php
            $hinhpath = "public/images/tintuc/" . $value["HinhAnh"];
            if (is_file($hinhpath)) {
              $hinh = "<img src='" . $hinhpath . "' height='40px'>";
            } else {
              $hinh = "Chưa có ảnh";
            }
            ?>
            <tr>
              <td> <?php echo $value["MaBV"] ?></td>
              <td><?php echo $value["TenBV"] ?></td>
              <td><?php echo $value["TaiKhoan"] ?></td>
              <td><?php echo $hinh?></td>
              <td><?php echo $value["TieuDe"] ?></td>
              <td><?php echo $value["NoiDung"] ?></td>
              <td><?php echo $value["NgayNhap"] ?></td>
              <td><a class="text-decoration-none btn btn-danger" href="<?php echo base_url ?>delbv/<?php echo $value['MaBV'] ?>">Xóa</a></td>
              <td><a class="text-decoration-none btn btn-danger" href="<?php echo base_url ?>editbv/<?php echo $value['MaBV'] ?>">Sửa
                  </a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <a href="<?php echo base_url ?>addbv" class="btn btn-danger">Thêm mới</a>
    </div>
  </div>
</body>

</html>