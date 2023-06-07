<?php
use Illuminate\Database\Eloquent\Model as Model;
class signupModel extends Model{
public $table="signup";
public $timestamps=false;
public $fillable=['fullname', 'tendangnhap', 'sdt', 'email', 'password', 'phanquyen'];
}
?>