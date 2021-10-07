<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class SportView{
    private $smarty;
    
    function __construct(){
        $this->smarty=new Smarty();
    }
    function showHomeRedirect(){
        header("Location: ".BASE_URL."home");
    }

    function showSports($sports){
        $this->smarty->assign('sports', $sports);
        $this->smarty->display('templates/index.tpl');
    }

    function showSport($sport){
        $this->smarty->assign('sport', $sport);
        $this->smarty->display('templates/sportDetail.tpl');
    }

}