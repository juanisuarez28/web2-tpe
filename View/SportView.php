<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class SportView{
    private $smarty;
    
    function __construct(){
        $this->smarty=new Smarty();
    }
    function showSportsRedirect(){
        header("Location: ".BASE_URL."viewSports");
    }

    function showSportsStandard($sports){
        $this->smarty->assign('sports', $sports);
        $this->smarty->display('templates/sportsStandard.tpl');
    }
    function showSportsMod($sports){
        $this->smarty->assign('sports', $sports);
        $this->smarty->display('templates/sportsmod.tpl');
    }

    function showSport($sport){
        $this->smarty->assign('sport', $sport);
        $this->smarty->display('templates/sportDetail.tpl');
    }

}