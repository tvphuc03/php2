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
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Ảnh Sản Phẩm</th>
                    <th>Trạng Thái</th>
                    <th>Giá</th>
                    <th>Mô Tả</th>
                    <th>Số Lượng</th>
                    <th colspan="2">Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $key => $value) { ?>
                    <tr>
                        <td> <?php echo $value['id'] ?></td>
                        <td> <?php echo $value['tensp'] ?></td>
                        <td> <?php echo $value['anh'] ?></td>
                        <td> <?php echo $value['trangthai'] ?></td>
                        <td> <?php echo $value['gia'] ?></td>
                        <td> <?php echo $value['mota'] ?></td>
                        <td> <?php echo $value['soluong'] ?></td>
                        <td>
                            <a class="text-decoration-none" href="<?php echo base_url; ?>delsp/<?php echo $value['id'] ?>">
                                <input name="listok" type="submit" value="Xoá" class="ip_loc">
                            </a>
                        </td>
                        <td>
                            <a class="text-decoration-none" href="<?php echo base_url; ?>editsp/<?php echo $value['id'] ?>">
                                <input name="listok" type="submit" value="Sửa" class="ip_loc">
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="<?php echo base_url; ?>addsp" class="btnds">Thêm mới</a>
    </div>
</div>