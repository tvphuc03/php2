<?php

namespace lalava\controllers;

use lalava\core\Controller;

class signupController extends Controller
{
    public $signups = [];
    public function __construct()
    {
        $this->signups = $this->Model('signupModel');
    }

    public function signup()
    {
        $list = $this->signups::all();
        $this->viewadmin("admin/taikhoan/index", $list);
    }
    public function dangki()
    {
        $list = $this->signups::all();
        $this->viewuser("login-signup/signup", $list);
    }

    public function addUser()
    {
        $this->viewadmin('admin/taikhoan/addTK');
        $nameErr = $emailErr = $passErr = $numberErr = "";
        $check = 0;
        $checkname = "/^[a-zA-z]*$/";
        $checkemail = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        $checknumber = "/^[0-9]*$/";
        $fullname = isset($_POST['txtFullname']) ? $_POST['txtFullname'] : "";
        $tendangnhap = isset($_POST['txtTaiKhoan']) ? $_POST['txtTaiKhoan'] : "";
        $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";
        $number = isset($_POST['txtSDT']) ? $_POST['txtSDT'] : "";
        $password = isset($_POST['txtMatKhau']) ? $_POST['txtMatKhau'] : "";
        $phanquyen = isset($_POST['txtPhanQuyen']) ? $_POST['txtPhanQuyen'] : "";
        $repeatpass = isset($_POST['repass']) ? $_POST['repass'] : "";

        // full name
        if ($fullname != "" && $email != "" && $number != "" && $password != "" && $check == 0) {
            if (!preg_match($checkname, $fullname)) {
                $nameErr = "vui lòng nhập đúng tên.";
                $check++;
            } else if (!preg_match($checkemail, $email)) {
                $emailErr = "Vui lòng nhập đúng địa chỉ Email.";
                $check++;
            } elseif (!preg_match($checknumber, $number)) {
                $number = "Vui lòng nhập số.";
                $check++;
            } elseif ($repeatpass != $password) {
                $passErr = "vui lòng nhập pass và repeatpass giống nhau";
                $check++;
            }
            $this->signups::create([
                'fullname' => $fullname,
                'tendangnhap' => $tendangnhap,
                'email' => $email,
                'sdt' => $number,
                'password' => $password,
                'phanquyen' => $phanquyen
            ]);
        }
        // // email
        // if (!preg_match($checkemail, $email)) {
        //     $emailErr = "Vui lòng nhập đúng địa chỉ Email.";
        // } else {
        //     $this->signups::create([
        //         'email' => $email
        //     ]);
        // }
        // // Number
        // if (!preg_match("/^[0-9]*$/", $number)) {
        //     $number = "Vui lòng nhập số.";
        // } else {
        //     $this->signups::create([
        //         'sdt' => $number
        //     ]);
        // }
        // // password
        // // repeat password
        // if ($repeatpass != $password) {
        //     $passErr = "vui lòng nhập pass và repeatpass giống nhau";
        // } else {
        //     $this->signups::create([
        //         'password' => $password
        //     ]);
        // }
        header('location: http://localhost/php2/lalava/signup');
    }
    public function addUserr()
    {
        $this->viewuser('login-signup/signup');
        $nameErr = $emailErr = $passErr = $numberErr = "";
        $check = 0;
        $checkname = "/^[a-zA-z]*$/";
        $checkemail = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        $checknumber = "/^[0-9]*$/";
        $fullname = isset($_POST['txtFullname']) ? $_POST['txtFullname'] : "";
        $tendangnhap = isset($_POST['txtTaiKhoan']) ? $_POST['txtTaiKhoan'] : "";
        $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";
        $number = isset($_POST['txtSDT']) ? $_POST['txtSDT'] : "";
        $password = isset($_POST['txtMatKhau']) ? $_POST['txtMatKhau'] : "";
        $phanquyen = isset($_POST['txtPhanQuyen']) ? $_POST['txtPhanQuyen'] : "";
        $repeatpass = isset($_POST['repass']) ? $_POST['repass'] : "";

        // full name
        if ($fullname != "" && $email != "" && $number != "" && $password != "" && $repeatpass != "" && $check == 0) {
            if (!preg_match($checkname, $fullname)) {
                $nameErr = "vui lòng nhập đúng tên.";
                $check++;
            } else if (!preg_match($checkemail, $email)) {
                $emailErr = "Vui lòng nhập đúng địa chỉ Email.";
                $check++;
            } elseif (!preg_match($checknumber, $number)) {
                $number = "Vui lòng nhập số.";
                $check++;
            } elseif ($repeatpass != $password) {
                $passErr = "vui lòng nhập pass và repeatpass giống nhau";
                $check++;
            }
            $this->signups::create([
                'fullname' => $fullname,
                'tendangnhap' => $tendangnhap,
                'email' => $email,
                'sdt' => $number,
                'password' => $password,
                'phanquyen' => $phanquyen
            ]);
            
            echo "<script>alert(`Đăng kí thành công`);</script>";
        }
        
        header('location: http://localhost/php2/lalava/login');
    }

    public function deltk()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        if ($id != "") $this->signups::where("id", $id)->delete();
        header('location: http://localhost/php2/lalava/signup');
    }
    public function edittk()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        if ($id != "") {
            $signup = $this->signups::where("id", $id)->get();
            // var_dump($cate);
            $this->viewadmin('admin/taikhoan/editTK', $signup);
        }
    }

    public function updatetk()
    {
        $fullname = isset($_POST['txtFullname']) ? $_POST['txtFullname'] : "";
        $tendangnhap = isset($_POST['txtTaiKhoan']) ? $_POST['txtTaiKhoan'] : "";
        $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "";
        $number = isset($_POST['txtSDT']) ? $_POST['txtSDT'] : "";
        $password = isset($_POST['txtMatKhau']) ? $_POST['txtMatKhau'] : "";
        $phanquyen = isset($_POST['txtPhanQuyen']) ? $_POST['txtPhanQuyen'] : "";
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        if ($fullname != "" && $email != "" && $number != "" && $password != "")
            $this->signups::where("id", $id)->update([
                'fullname' => $fullname,
                'tendangnhap' => $tendangnhap,
                'email' => $email,
                'sdt' => $number,
                'password' => $password,
                'phanquyen' => $phanquyen
            ]);
        header("location: http://localhost/php2/lalava/signup");
    }
}
