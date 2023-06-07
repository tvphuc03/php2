<?php
namespace lalava\controllers;
use lalava\core\Controller;
class homeController extends Controller{
    public $homes = [];
    public $newhomes = [];
    public function __construct()
    {
        $this->homes = $this->Model('productModel');
        $this->newhomes = $this->Model('newsModel');
    }
    public function index()
    {
        $list = $this->newhomes::limit(3)->get();
        $list = $this->homes::limit(4)->get();
        $this->viewuser("home/index", $list);
    }
}
?>