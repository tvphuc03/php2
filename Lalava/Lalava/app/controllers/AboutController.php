<?php
namespace lalava\controllers;
use lalava\core\Controller;
class AboutController extends Controller{
    public function index(){
        $data=['content'=>"Đây là nội dung của trang giới thiệu"];

    $this->viewuser("about/index",$data,'main');
    }
}

?>