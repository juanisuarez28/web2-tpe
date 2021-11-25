<?php
require_once "Model/SportModel.php";
require_once "View/SportView.php";
require_once 'Helpers/AuthHelper.php';
class SportsController{
    private $model;
    private $view;
    private $helper;

    function __construct(){
        $this->model=new SportModel();
        $this->view=new SportView();
        $this->helper=new AuthHelper(); 
    }
    function createSport(){
        $this->model->insertSport($_POST['sport'], $_POST['category'], $_POST['gender']);
        $this->view->showSportsRedirect();
    }
    function viewSports(){
        $rol=$this->helper->checkRol();
        $sports = $this->model->getSports();
        if($rol=="standard"||$rol=="notLogged"){
            $this->view->showSportsStandard($sports);

        }else{
            $this->view->showSportsMod($sports);
        }
    }
    function viewSport($id){
        $sport = $this->model->getSport($id);
        $this->view->showSport($sport);
    }
    function deleteSport($id){
        $this->model->deleteSport($id);
        $this->view->showSportsRedirect();
    }
    function updateSport(){
        $this->model->updateSport($_POST['id'], $_POST['deporte'],$_POST['categoria'],$_POST['genero']);
        $this->view->showSportsRedirect();
    }

}