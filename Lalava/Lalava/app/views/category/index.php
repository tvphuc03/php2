<h2>Thêm danh mục</h2>
<form action="" method="post">
    <input type="text" name="txtname" >
    <button>Lưu</button>
</form>
<ol>
    <?php foreach($data as $key =>$value){?>
       <li><?php
        echo $value['name'];?>
        <a href="<?php echo base_url ?>editcate/<?php echo $value['id']?>">edit</a>
        <a href="<?php echo base_url ?>delcate/<?php echo $value['id']?>">delete</a>
       </li> 
    <?php } ?>
    
</ol>