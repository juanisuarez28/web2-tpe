<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class PlayersView{
    private $smarty;
    
    function __construct(){
        $this->smarty=new Smarty();
    }
    function showHomeRedirect(){
        header("Location: ".BASE_URL."home");
    }
    function showPlayer($player){
        $this->smarty->assign('player', $player);
        $this->smarty->display('templates/playerDetail.tpl');
    }
    function showPlayersOfSport($players){
        $this->smarty->assign('players', $players);
        $this->smarty->display('templates/playersOfSport.tpl');
    }
}