<?php
namespace lalava\controllers;
use lalava\core;
use lalava\core\Controller;

class ContactController extends Controller{
    public function form(){
        $this->view("contact/form");
    }
}
