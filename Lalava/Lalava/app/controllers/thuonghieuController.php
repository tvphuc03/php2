<?php
namespace lalava\controllers;
use lalava\core\Controller;
class thuonghieuController extends Controller{
    public $ths=[];
    public function __construct()
    {
        $this->ths=$this->Model('thuonghieuModel');
    }
    public function index(){
        $list=$this->ths::all();
        $this->viewadmin("admin/thuonghieu/showth",$list);
    }
    public function addth()
    {
        $this->viewadmin("admin/thuonghieu/addth");
        $name=isset($_POST['txtname'])?$_POST['txtname']:"";
        if($name!=""){
            $this -> ths::create([
                'TenTH' => $name
            ]);
        }
    }
    public function delth()
    {
        $id=isset($_GET['id'])?$_GET['id']:"";
        if($id!="") $this->ths::where("MaTH",$id)->delete();
        header('location: http://localhost/php2/lalava/thuonghieu');
    }
    public function editth()
    {
        $id=isset($_GET['id'])?$_GET['id']:"";
        if($id!=""){
            $th= $this->ths::where("MaTH",$id)->get();
            // var_dump($th);
            $this->viewadmin('admin/thuonghieu/editth',$th);
        }
        
    }
    public function updateth()
    {
        $name=isset($_POST['txtname'])?$_POST['txtname']:"";
        $id=isset($_GET['id'])?$_GET['id']:"";
        if ($name !="") 
        $this->ths::where("MaTH",$id)->update(["TenTH"=>$name]);
        header("location: http://localhost/php2/lalava/thuonghieu");
    }
}
?>