<?php
include_once("app/init.php");
use lalava\core\Router;
use lalava\controllers\AboutController;
use lalava\controllers\ConTactController;
use lalava\controllers\ProductController;
use lalava\controllers\CategoryController;
use lalava\controllers\loginController;
use lalava\controllers\signupController;
use lalava\controllers\homeController;
use lalava\controllers\thuonghieuController;
use lalava\controllers\newsController;


$router=new Router;
// $router->get("/",[homeController::class,"index"]);
$router->get("/",[homeController::class,"index"]);


$router->get("/contact",[ConTactController::class,"form"]);

$router->get("/about",[AboutController::class,"index"]);

$router->get("/product",[ProductController::class,"index"]);
$router->post("/addproduct",[productController::class,"addProduct"]);
$router->get("/delproduct",[ProductController::class,"delProduct"]);
$router->get("/editproduct",[ProductController::class,"editProduct"]);
$router->post("/editproduct",[ProductController::class,"updateProduct"]);

$router->get("/category",[CategoryController::class,"index"]);
$router->post("/category",[CategoryController::class,"addCate"]);
$router->get("/delcate",[CategoryController::class,"delcate"]);
$router->get("/editcate",[CategoryController::class,"editcate"]);
$router->post("/editcate",[CategoryController::class,"updatecate"]);

$router->get("/thuonghieu",[thuonghieuController::class,"index"]);
$router->post("/addth",[thuonghieuController::class,"addth"]);
$router->get("/addth",[thuonghieuController::class,"addth"]);
$router->post("/addth",[thuonghieuController::class,"addth"]);
$router->get("/delth",[thuonghieuController::class,"delth"]);
$router->get("/editth",[thuonghieuController::class,"editth"]);
$router->post("/editth",[thuonghieuController::class,"updateth"]);

$router->get("/baiviet",[newsController::class,"new"]);
$router->get("/addbv",[newsController::class,"add"]);
$router->post("/addbv",[newsController::class,"addbv"]);
$router->get("/delbv",[newsController::class,"delbv"]);
$router->get("/editbv",[newsController::class,"editbv"]);
$router->post("/editbv",[newsController::class,"updatebv"]);


// user
$router->get("/login",[loginController::class,"login"]);
$router->post("/login",[loginController::class,"login"]);
//user
$router->post("/dangki",[signupController::class,"addUserr"]);
//admin
$router->get("/signup",[signupController::class,"signup"]);
$router->get("/dangki",[signupController::class,"dangki"]);
$router->post("/signup",[signupController::class,"addUser"]);
$router->get("/addtk",[signupController::class,"addUser"]);
$router->post("/addtk",[signupController::class,"addUser"]);
$router->get("/deltk",[signupController::class,"deltk"]);
$router->get("/edittk",[signupController::class,"edittk"]);
$router->post("/edittk",[signupController::class,"updatetk"]);




$router->post("/contact",function(){
    echo "Trang Liên Hệ POST";
});
$router->run(); 
?>