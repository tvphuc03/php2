<?php
namespace lalava\core;
class Router{
    public $routers=[];
    public function get($path,$callback){
        $this->routers['get'][$path]=$callback;
    }
    public function post($path,$callback){
        $this->routers['post'][$path]=$callback;
    }
    public function run(){
       
   $method=strtolower($_SERVER["REQUEST_METHOD"]);
//    echo $method;
$path=isset($_GET['url'])?"/".$_GET["url"]:"/";
$callback=$this->routers[$method][$path]??false;
if($callback==false){
    echo "<h1 style=font-size:100px;text-align:center;margin-top:20%>Not Found</h1>";

    exit;
}
if(is_object($callback)) call_user_func($callback);
if(is_array($callback)){
    $controller=new $callback[0];
    $action=$callback[1];
    call_user_func([$controller,$action]);
}
}
}
?>