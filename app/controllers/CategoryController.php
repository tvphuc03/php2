<?php
namespace lalava\controllers;
use lalava\core\Controller;
class CategoryController extends Controller{
    public $categories=[];
    public function __construct()
    {
        $this->categories=$this->Model('CategoryModel');
    }
    public function index(){
        $list=$this->categories::all();
        $this->viewadmin("category/index",$list);
    }
    public function addCate()
    {
        $name=isset($_POST['txtname'])?$_POST['txtname']:"";
        if($name!=""){
            $this -> categories::create([
                'name' => $name
            ]);
            header('location: http://localhost/php2/lalava/category');
        }
    }
    public function delcate()
    {
        $id=isset($_GET['id'])?$_GET['id']:"";
        if($id!="") $this->categories::where("id",$id)->delete();
        header('location: http://localhost/php2/lalava/category');
    }
    public function editcate()
    {
        $id=isset($_GET['id'])?$_GET['id']:"";
        if($id!=""){
            $cate= $this->categories::where("id",$id)->get();
            // var_dump($cate);
            $this->viewadmin('category/editcate',$cate);
        }
        
    }
    public function updatecate()
    {
        $name=isset($_POST['txtname'])?$_POST['txtname']:"";
        $id=isset($_GET['id'])?$_GET['id']:"";
        if ($name !="") 
        $this->categories::where("id",$id)->update(["name"=>$name]);
        header("location: http://localhost/php2/lalava/category");
    }
}
?>