<div class="container">

    <form action="" method="POST" enctype="multipart/form-data">

        <div class="row mt-2">
            <div class="col">
                <label for="" class="form-label">Mã sản phẩm:</label>
                <input type="text" class="form-control" placeholder="<?php echo $data[0]['MaSP']; ?>" disabled>
            </div>
            <div class="col">
                <label for="" class="form-label">Tên Sản phẩm:</label>
                <input type="text" class="form-control" placeholder="<?php echo $data[0]['TenSP']; ?>" name="txtTenSP">
                <?php
                ?>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="" class="form-label">Giá Cũ:</label>
                <input type="text" class="form-control" placeholder="<?php echo $data[0]['GiaCu']; ?>" name="txtTrangThai">
                <?php
                ?>
            </div>
            <div class="col">
                <label for="" class="form-label">Giá:</label>
                <input type="text" class="form-control" placeholder="<?php echo $data[0]['GiaMoi']; ?>" name="txtGia">
                <?php
                ?>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="" class="form-label">Hình ảnh:</label>
                <input type="file" class="form-control" placeholder="<?php echo $data[0]['hinhanh']; ?>" name="fileAnh">
            </div>
            <div class="col">
                <label for="" class="form-label">Số Lượng:</label>
                <input type="text" class="form-control" placeholder="<?php echo $data[0]['SoLuong']; ?>" name="txtSoLuong">
            </div>
        </div>
        <div class="row">
            <label for="comment">Mô tả:</label>
            <textarea class="form-control" rows="5" placeholder="<?php echo $data[0]['MoTa']; ?>" name="txtMoTa"></textarea>
        </div>
        <button type="submit" name="Save" class="btnadd">Save</button>
        <a href="<?php echo base_url?>editsp" class="btnds">Danh sách</a>
    </form>

</div>