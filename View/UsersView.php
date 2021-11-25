<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class UsersView{
    private $smarty;
    function __construct(){
        $this->smarty=new Smarty();
    }
    function showUsersNotMod($users){
        $this->smarty->assign('users', $users);
        $this->smarty->display('templates/users.tpl');
    }
    function showUsersMod($users){
        $this->smarty->assign('users', $users);
        $this->smarty->display('templates/usersMod.tpl');
    }
}