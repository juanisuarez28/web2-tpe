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
    /*function showIndexUser($players, $sports){
        $this->smarty->assign('players', $players);
        $this->smarty->assign('sports', $sports);
        $this->smarty->display('templates/indexUser.tpl');
    }
    function showIndexMod($players, $sports){
        $this->smarty->assign('players', $players);
        $this->smarty->assign('sports', $sports);
        $this->smarty->display('templates/indexMod.tpl');
    }
    */
    function showLoginRedirect(){
        header("Location: ".BASE_URL."login");
    }
}
