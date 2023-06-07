<?php
namespace lalava\core;
class Controller{
public function viewuser($view,$data=[],$layout="main"){
    $contentLayout=$this->Layout($layout);
    $contentView=$this->OnlyView($view,$data);
    echo str_replace("{{content}}",$contentView,$contentLayout);
}
public function viewadmin($view,$data=[],$layout="admin"){
    $contentLayout=$this->Layout($layout);
    $contentView=$this->OnlyView($view,$data);
    echo str_replace("{{content}}",$contentView,$contentLayout);
}
public function Layout($layout){
    ob_start();
    include "app/views/layout/$layout.php";
    return ob_get_clean();
}
public function OnlyView($view,$data=[]){
    ob_start();
    include "app/views/$view.php";
    return ob_get_clean();
}
public function Model($model){
    include "app/models/$model.php";
    return new $model;
}
}
?>