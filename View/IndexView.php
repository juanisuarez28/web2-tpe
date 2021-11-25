<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class IndexView{
    private $smarty;
    function __construct(){
        $this->smarty=new Smarty();
    }
    function showHomeRedirect(){
        header("Location: ".BASE_URL."home");
    }
    function showHome(){
        $this->smarty->display('templates/home.tpl');
    }

    function showLoginRedirect(){
        header("Location: ".BASE_URL."login");
    }
}
