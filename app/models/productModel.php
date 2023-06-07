<?php
use Illuminate\Database\Eloquent\Model as Model;

class productModel extends Model{
public $table="sanpham";
public $timestamps=false;
public $fillable=['MaSP', 'TenSP', 'MaTH', 'GiaCu', 'GiaMoi', 'HinhAnh', 'MoTa', 'SoLuong', 'LX'];
}
?>