<div class="row">
  <div class="container mt-3 p-5 text-center">
    <h2>DANH SÁCH THƯƠNG HIỆU</h2>
    <form action="index.php?act=dsth" method="post">
      <input type="text" name="kyw" class="ip_search" placeholder="Tìm kiếm.....">
      <input name="listok" type="submit" value="Lọc" class="ip_loc">
    </form>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Mã Thương Hiệu</th>
          <th>Tên Thương Hiệu</th>
          <th colspan="2">Hành Động</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($data as $key => $value) { ?>
          <tr>  
            <td> <?php echo $value['MaTH'] ?></td>
            <td> <?php echo $value['TenTH'] ?></td>
            <td>
              <a class="text-decoration-none" href="<?php echo base_url; ?>delth/<?php echo $value['MaTH'] ?>">
                <input  type="submit" value="Xoá" class="btn-danger btn">
              </a>
            </td>
            <td>
              <a class="text-decoration-none" href="<?php echo base_url; ?>editth/<?php echo $value['MaTH'] ?>">
                <input name="" type="submit" value="Sửa" class=" btn-danger btn">
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href="<?php echo base_url; ?>addth" class="btnds btn-danger btn">Thêm mới</a>
  </div>
</div>
