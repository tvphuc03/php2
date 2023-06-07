<div class="container">

    <form action="" method="POST">
        <div class="row mt-2 mb-3">
            <div class="col">
                <label for="" class="form-label">Mã Tài Khoản:</label>
                <input type="text" class="form-control" placeholder="Mã loại tài khoản" name="txtID" disabled>
            </div>
            <div class="col">
                <label for="" class="form-label">Họ tên:</label>
                <input type="text" class="form-control" placeholder="Họ và Tên" name="txtFullname">
            </div>
        </div>
        <div class="row mt-2 mb-3">
            <div class="col">
                <label for="" class="form-label">Tên đăng nhập:</label>
                <input type="text" class="form-control" placeholder="Tài Khoản" name="txtTaiKhoan">
            </div>
            <div class="col">
                <label for="" class="form-label">Mật khẩu:</label>
                <input type="password" class="form-control" placeholder="Mật Khẩu" name="txtMatKhau">
            </div>
        </div>
        <div class="row mt-2 mb-3">
            <div class="col">
                <label for="" class="form-label">Email:</label>
                <input type="email" class="form-control" placeholder="Email" name="txtEmail">
            </div>
            <div class="col">
                <label for="" class="form-label">Số điện thoại:</label>
                <input type="number" class="form-control" placeholder="Số Điện Thoại" name="txtSDT">
            </div>
        </div>
        <div class="col mb-3" >
            <label for="" class="form-label">Phân quyền:</label>
            <input type="number" class="form-control" placeholder="Phân Quyền" name="txtPhanQuyen">
        </div>
        <button type="submit" name="add" class="btnadd btn btn-danger">Add</button>
        <a href="<?php echo base_url; ?>signup" class="btnds btn btn-danger">Danh sách</a>
    </form>

</div>