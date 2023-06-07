<?php
use Illuminate\Database\Eloquent\Model as Model;
class CategoryModel extends Model{
public $table="giohang";
public $timestamps=false;
public $fillable=['MaGH','MaTK','MaSP','HinhAnh','TenSP','Gia','SoLuong','Size','ThanhTien','MaHD'];
}
?>