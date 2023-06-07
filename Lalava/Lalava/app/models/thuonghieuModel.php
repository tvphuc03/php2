<?php
use Illuminate\Database\Eloquent\Model as Model;
class thuonghieuModel extends Model{
public $table="thuonghieu";
public $timestamps=false;
public $fillable=['MaTH','TenTH'];
}
?>