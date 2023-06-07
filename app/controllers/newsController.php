<?php

namespace lalava\controllers;

use lalava\core\Controller;

class newsController extends Controller
{
    public $news = [];
    public function __construct()
    {
        $this->news = $this->Model('newsModel');
    }

    public function new()
    {
        $list = $this->news::all();
        $this->viewadmin("admin/baiviet/showbv", $list);
    }
    public function add()
    {
        $this->viewadmin("admin/baiviet/addbv");
    }

    public function addbv()
    {
        if (isset($_POST['addbv'])) {
            $mabv = $_POST['txtMaBV'];
            $hinhanh = $_FILES['FileHinh']['name'];
            $tenbv = $_POST['txtTenBV'];
            $taikhoan = $_POST['txtTK'];
            $tieude = $_POST['txtTD'];
            $noidung = $_POST['txtND'];
            $ngaynhap = $_POST['txtNgay'];
            $target_dir = "public/images/tintuc/";
            $target_file = $target_dir . basename($_FILES["FileHinh"]["name"]);
            if (move_uploaded_file($_FILES["FileHinh"]['tmp_name'], $target_file)) {
                if ($tenbv != "" && $taikhoan != "" && $tieude != "" && $noidung != "" && $ngaynhap != "" && $hinhanh != "") {
                    $this->news::create([
                        'MaBV' => $mabv,
                        'TenBV' => $tenbv,
                        'TaiKhoan' => $taikhoan,
                        'HinhAnh' => $hinhanh,
                        'TieuDe' => $tieude,
                        'NoiDung' => $noidung,
                        'NgayNhap' => $ngaynhap,
                    ]);
                    header('location: http://localhost/php2/lalava/baiviet');
                }
            }
        }
    }

    public function delbv()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        if ($id != "") $this->news::where("MaBV", $id)->delete();
        header('location: http://localhost/php2/lalava/baiviet');
    }
    public function editbv()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        if ($id != "") {
            $new = $this->news::where("MaBV", $id)->get();
            // var_dump($cate);
            $this->viewadmin('admin/baiviet/updatebv', $new);
        }
    }

    public function updatebv()
    {
        if (isset($_POST['updatebv'])) {
            // $mabv = $_POST['txtMaBV'];
            $hinhanh = $_FILES['FileHinh']['name'];
            $tenbv = $_POST['txtTenBV'];
            $taikhoan = $_POST['txtTK'];
            $tieude = $_POST['txtTD'];
            $noidung = $_POST['txtND'];
            $ngaynhap = $_POST['txtNgay'];
            $target_dir = "public/images/tintuc/";
            $target_file = $target_dir . basename($_FILES["FileHinh"]["name"]);
            $id = isset($_GET['id']) ? $_GET['id'] : "";
            if (move_uploaded_file($_FILES["FileHinh"]['tmp_name'], $target_file)) {
                if ($tenbv != ""  && $tieude != "" && $noidung != "" && $ngaynhap != "" && $hinhanh != "") {
                    $this->news::where("MaBV",$id)->update([
                        // 'MaBV' => $mabv,
                        'TenBV' => $tenbv,
                        'TaiKhoan' => $taikhoan,
                        'HinhAnh' => $hinhanh,
                        'TieuDe' => $tieude,
                        'NoiDung' => $noidung,
                        'NgayNhap' => $ngaynhap,
                    ]);
                }
                header('location: http://localhost/php2/lalava/baiviet');
            }
        }
    }
}
