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
        if(!isset($_GET['cuota'])){
            $cuota=0;
        }else{               
            $cuota=1;
        }
        if($_FILES['image']['type'] == "image/jpg" || $_FILES['images']['type'] == "image/jpeg" || $_FILES['images']['type'] == "image/png" ) {
                    $this->model->insertPlayer($_POST['name'], $_POST['sport'], $_POST['dni'],$_POST['phone_number'], $cuota, $_FILES['images']);
                    $this->view->showPlayersRedirect();
        }
    }

    function deletePlayer($id){
        $this->model->deletePlayer($id);
        $this->view->showPlayersRedirect();
    }

    function updatePlayer(){
        if(!isset($_POST['cuota'])){
            $cuota=0;
        }else{               
            $cuota=1;
        }
        $this->model->updatePlayer($_POST['anteriorNombre'], $_POST['nombre'], $_POST['dni'], $_POST['telefono'], $cuota, $_POST['sport']);
        $this->view->showPlayersRedirect();
    }

    function viewPlayers(){
        $rol=$this->helper->checkRol();
        $players=$this->model->getPlayers();
        $sports=$this->sportModel->getSports();
        if($rol=="mod"){
            $this->view->showPlayersMod($players, $sports);
         
        }else{
            $this->view->showPlayers($players, $sports);
        }
    } 

    function viewPlayer($id){
        $rol=$this->helper->checkRol();
        $player=$this->model->getPlayer($id);
        if($rol=="notLogged"){
            $this->view->showPlayerNotLogged($player);
        }else if($rol=="mod"||$rol=="standard"){
            $this->view->showPlayer($player);
        }
    }  

    function viewPlayersOfSport($id){
        $players=$this->model->getPlayersOfSport($id);
        $this->view->showPlayersOfSport($players);
    }
}