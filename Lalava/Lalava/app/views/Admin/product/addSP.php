<div class="container">

    <form action="" method="POST" enctype="multipart/form-data">

        <div class="row mt-2">
            <div class="col">
                <label for="" class="form-label">Thương Hiệu</label>
                <input type="text" class="form-control" placeholder="Mã sản phẩm" disabled>
            </div>
            <div class="col">
                <label for="" class="form-label">Tên Sản phẩm:</label>
                <input type="text" class="form-control" placeholder="Tên sản phẩm" name="txtTenSP">
                <?php
                ?>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="" class="form-label">Giá Cũ</label>
                <input type="text" class="form-control" placeholder="Giá Cũ" name="txtGia">
                <?php
                ?>
            </div>
            <div class="col">
                <label for="" class="form-label">Giá Mới:</label>
                <input type="text" class="form-control" placeholder="Giá Mới" name="txtGG">
                <?php
                ?>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="" class="form-label">Hình ảnh:</label>
                <input type="file" class="form-control" name="FileHinh">
            </div>
            <div class="col">
                <label for="" class="form-label">Số Lượng:</label>
                <input type="text" class="form-control" name="txtSL">
            </div>
        </div>
        <div class="row">
            <label for="comment">Mô tả:</label>
            <textarea class="form-control" rows="5" name="txtmota"></textarea>
        </div>
        <button type="submit" name="add" class="btnadd">Add</button>
        <a href="<?php echo base_url?>addsp" class="btnds">Danh sách</a>
    </form>

</div>