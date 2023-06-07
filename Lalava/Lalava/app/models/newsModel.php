<?php
use Illuminate\Database\Eloquent\Model as Model;
class newsModel extends Model{
public $table="baiviet";
public $timestamps=false;
public $fillable=['MaBV','TenBV', 'MaTK', 'TaiKhoan', 'TieuDe', 'HinhAnh', 'NoiDung', 'NgayNhap'];
}
?>