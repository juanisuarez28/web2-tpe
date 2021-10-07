<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class LoginView{
    private $smarty;
    function __construct(){
        $this->smarty= new Smarty();
    }
    function showHome(){
        header("Location: ".BASE_URL."home");
    }
    function showLogin($error = ""){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/userLogInForm.tpl');
    }
    function ShowCheckIn(){
        $this->smarty->display('templates/userCheckInForm.tpl'); 
    }
}