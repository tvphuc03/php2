<div class="row">
    <div class="container mt-3 p-5 text-center">
        <h2>DANH SÁCH TÀI KHOẢN</h2>
        <form action="index.php?act=dsth" method="post">
            <input type="text" name="kyw" class="ip_search" placeholder="Tìm kiếm.....">
            <input name="listok" type="submit" value="Lọc" class="ip_loc">
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mã Tài Khoản</th>
                    <th>Tài Khoản</th>
                    <th>Họ Tên</th>
                    <th>Mật Khẩu</th>
                    <th>Email</th>
                    <th>Số điện thoai</th>
                    <th>Phân quyền</th>
                    <th colspan="2">Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $key => $value) { ?>
                    <tr>
                        <td> <?php echo $value['id'] ?></td>
                        <td> <?php echo $value['tendangnhap'] ?></td>
                        <td> <?php echo $value['fullname'] ?></td>
                        <td> <?php echo $value['password'] ?></td>
                        <td> <?php echo $value['email'] ?></td>
                        <td> 0<?php echo $value['sdt'] ?></td>
                        <td> <?php echo $value['phanquyen'] ?></td>
                        <td>
                            <a class="text-decoration-none" href="<?php echo base_url; ?>deltk/<?php echo $value['id'] ?>">
                                <input name="" type="submit" value="Xoá" class="btn btn-danger">
                            </a>
                        </td>
                        <td>
                            <a class="text-decoration-none" href="<?php echo base_url; ?>edittk/<?php echo $value['id'] ?>">
                                <input name="" type="submit" value="Sửa" class="btn btn-danger">
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="<?php echo base_url; ?>addtk" class="btnds btn btn-danger">Thêm mới</a>
    </div>
</div>