<?php
require_once "Model/PlayersModel.php";
require_once "Model/SportModel.php";
require_once "View/PlayersView.php";
require_once 'Helpers/AuthHelper.php';

class PlayersController{
    private $model;
    private $view;
    private $helper;
    private $sportModel;

    function __construct(){
        $this->model=new PlayersModel();
        $this->view=new PlayersView();  
        $this->helper=new AuthHelper();
        $this->sportModel=new SportModel();      
    }
    function createPlayer(){
        $this->helper->checkLoggedIn();
        if(!isset($_GET['cuota'])){
            $cuota=0;
        }else{               
            $cuota=1;
        }
        $this->model->insertPlayer($_POST['name'], $_POST['sport'], $_POST['dni'],$_POST['phone_number'], $cuota);
        $this->view->showHomeRedirect();
    }
    function deletePlayer($id){
        $this->helper->checkLoggedIn();
        $this->model->deletePlayer($id);
        $this->view->showHomeRedirect();
    }
    function updatePlayer(){
        if(!isset($_POST['cuota'])){
            $cuota=0;
        }else{               
            $cuota=1;
        }
        $this->model->updatePlayer($_POST['anteriorNombre'], $_POST['nombre'], $_POST['dni'], $_POST['telefono'], $cuota, $_POST['sport']);
        $this->view->showHomeRedirect();
    }
    function viewPlayers(){
        $this->helper->checkLoggedIn();
        $rol=$this->helper->checkRol();
        $players=$this->model->getPlayers();
        $sports=$this->sportModel->getSports();
        if($rol=="standard"){
            $this->view->showPlayersStandard($players, $sports);
        }else{
            $this->view->showPlayersMod($players, $sports);
        }
    } 
    function viewPlayer($id){
        $this->helper->checkLoggedIn();
        $player=$this->model->getPlayer($id);
        $this->view->showPlayer($player);
    }  
    function viewPlayersOfSport($id){
        $this->helper->checkLoggedIn();
        $players=$this->model->getPlayersOfSport($id);
        $this->view->showPlayersOfSport($players);
    }
}