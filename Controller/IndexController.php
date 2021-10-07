<?php
require_once "PlayersController.php";
require_once "SportController.php";
require_once "View/IndexView.php"; 
require_once 'Helpers/AuthHelper.php';
class IndexController{
    private $sportsModel;    
    private $playersModel;
    private $indexView;
    private $helper;

    function __construct(){
        $this->playersModel= new playersModel();
        $this->sportsModel= new SportModel();
        $this->indexView = new IndexView();
        $this->helper=new AuthHelper();   
    }
    function showHome(){
        //se pasa un rol para poder distinguir si el usuario es un moderador o un usuario estandar
        $this->helper->checkLoggedIn();
        $rol=$this->helper->checkRol();
        $players= $this->playersModel->getPlayers();
        $sports = $this->sportsModel->getSports();
        //esto se realiza sin importar el usuario ya que mostramos los deportes y los jugadores
        if($rol == "standard"){
            $this->indexView-> showIndexUser($players, $sports);  
        }
        else if($rol == "mod"){
            $this->indexView-> showIndexMod($players, $sports);
        }
    }   
}