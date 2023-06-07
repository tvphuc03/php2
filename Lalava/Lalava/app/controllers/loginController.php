<?php
namespace lalava\controllers;
use lalava\core\Controller;
class loginController extends Controller{
    public $signups = [];
    public function __construct()
    {
        $this->signups = $this->Model('signupModel');
    }
    public function login(){
        $this->viewuser("login-signup/login");
        $taikhoan=isset($_GET["tendangnhap"]);
        $matkhau=isset($_GET["password"]);
        $phanquyen=isset($_GET["phanquyen"]);
        $checktaikhoan=isset($_POST["txtUsername"])?$_POST["txtUsername"]:"";
        $checkpassword=isset($_POST["txtPassword"])?$_POST["txtPassword"]:"";
    if($taikhoan==$checktaikhoan&&$matkhau==$checkpassword){
        header("location: http://localhost/php2/lalava/product");
    }else{
        echo "<script>alert(`tài khoản mật khẩu sai`)</script>";
    }
    
    
}
}
?>