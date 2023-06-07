<?php

namespace lalava\controllers;
use lalava\core\Controller;
class ProductController extends Controller
{

    public $products = [];
    public $ths = [];
    public function __construct()
    {
        $this->products = $this->Model('productModel');
    }
    public function index()
    {
        $list = $this->products::all();
        $this->viewadmin("admin/product/index", $list);
        
    }
    public function addProduct()
    {
        $name = isset($_POST['txttensp']) ? $_POST['txttensp'] : "";
        $gia = isset($_POST['txtGia']) ? $_POST['txtGia'] : "";
        $sale = isset($_POST['txtGG']) ? $_POST['txtGG'] : "";
        $soluong = isset($_POST['txtSL']) ? $_POST['txtSL'] : "";
        $hinhanh = isset($_POST['FileHinh']) ? $_FILES['FileHinh']['name'] : "";
        $thuonghieu = isset($_POST['txtMaloai']) ? $_POST['txtMaloai'] : "";
        $mota = isset($_POST['txtmota']) ? $_POST['txtmota'] : "";
        $target_dir = "./public/images/sanpham/";
        $target_file = $target_dir . basename($_FILES["FileHinh"]["name"]);
        if (move_uploaded_file($_FILES["FileHinh"]["tmp_name"], $target_file)) {
            $this->products::create([
                'TenSP' => $name,
                'GiaCu' => $gia,
                'GiaMoi' => $sale,
                'SoLuong' => $soluong,
                'HinhAnh' => $hinhanh,
                'MaTH' => $thuonghieu,
                'MoTa' => $mota,
            ]);
            echo "<script>alert('Thêm thành công!')</script>";
            header('location: http://localhost/php2/lalava/product');
        } else {
            echo "<script>alert('Lỗi Upload ảnh!')</script>";
        }
        // if ($name != "") {
        //     $this->products::create([
        //         'TenSP' => $name,
        //         'GiaCu' => $gia,
        //         'GiaMoi' => $sale,
        //         'SoLuong' => $soluong,
        //         'HinhAnh' => $hinhanh,
        //         'MaTH' => $thuonghieu,
        //         'MoTa' => $mota,
        //     ]);
        //     header('location: http://localhost/php2/lalava/product');
        // }
    }
    public function delProduct()
    {
        $id=isset($_GET['id'])?$_GET['id']:"";
        if ($id!="")$this->products::where("MaSP",$id)->delete();
        header('location: http://localhost/php2/lalava/product');
    }
    public function editProduct()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        if ($id != "") {
            $product = $this->products::where("MaSP", $id)->get();
            // var_dump($cate);
            $this->viewadmin('admin/product/editproduct',$product);
        }
    }
    
    public function updateProduct()
    {
        $name = isset($_POST['txttensp']) ? $_POST['txttensp'] : "";
        $gia = isset($_POST['txtGia']) ? $_POST['txtGia'] : "";
        $sale = isset($_POST['txtGG']) ? $_POST['txtGG'] : "";
        $soluong = isset($_POST['txtSL']) ? $_POST['txtSL'] : "";
        $hinhanh = isset($_POST['FileHinh']) ? $_FILES['FileHinh']['name'] : "";
        $thuonghieu = isset($_POST['txtMaloai']) ? $_POST['txtMaloai'] : "";
        $mota = isset($_POST['txtmota']) ? $_POST['txtmota'] : "";
        $target_dir = "./public/images/sanpham/";
        $target_file = $target_dir . basename($_FILES["FileHinh"]["name"]);
        $target_file = $target_dir . basename($_FILES["FileHinh"]["name"]);
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        if ($name != "")
            $this->products::where("MaSP", $id)->update([
                'TenSP' => $name,
                'GiaCu' => $gia,
                'GiaMoi' => $sale,
                'SoLuong' => $soluong,
                'HinhAnh' => $hinhanh,
                'MaTH' => $thuonghieu,
                'MoTa' => $mota,
            ]);
        header("location: http://localhost/php2/lalava/product");
    }
}
?>