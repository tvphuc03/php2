<div class="container">

    <form action="" method="POST">
        <div class="row mt-2">
            <div class="col">
                <label for="" class="form-label">Mã Tài Khoản:</label>
                <input type="text" class="form-control" value="<?php echo $data[0]['id']; ?>" name="txtID" disabled>
            </div>
            <div class="col">
                <label for="" class="form-label">Họ tên:</label>
                <input type="text" class="form-control" value="<?php echo $data[0]['fullname']; ?>" name="txtFullname">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="" class="form-label">Tên đăng nhập:</label>
                <input type="text" class="form-control" value="<?php echo $data[0]['tendangnhap']; ?>" name="txtTaiKhoan">
            </div>
            <div class="col">
                <label for="" class="form-label">Mật khẩu:</label>
                <input type="password" class="form-control" value="<?php echo $data[0]['password']; ?>" name="txtMatKhau">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="" class="form-label">Email:</label>
                <input type="email" class="form-control" value="<?php echo $data[0]['email']; ?>" name="txtEmail">
            </div>
            <div class="col">
                <label for="" class="form-label">Số điện thoại:</label>
                <input type="number" class="form-control" value="<?php echo $data[0]['sdt']; ?>" name="txtSDT">
            </div>
        </div>
        <div class="col">
            <label for="" class="form-label">Phân quyền:</label>
            <input type="number" class="form-control" value="<?php echo $data[0]['phanquyen']; ?>" name="txtPhanQuyen">
        </div>
        <button type="submit" name="save" class="btnadd btn btn-danger">Save</button>
        <a href="<?php echo base_url; ?>signup" class="btnds btn btn-danger">Danh sách</a>
    </form>

</div>