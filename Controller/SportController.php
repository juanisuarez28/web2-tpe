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
        $this->helper->checkLoggedIn();
        $this->model->insertSport($_POST['sport'], $_POST['category'], $_POST['gender']);
        $this->view->showHomeRedirect();
    }
    function viewSports(){
        $this->helper->checkLoggedIn();
        $rol=$this->helper->checkRol();
        $sports = $this->model->getSports();
        if($rol=="standard"){
            $this->view->showSportsStandard($sports);

        }else{
            $this->view->showSportsMod($sports);
        }
    }
    function viewSport($id){
        $this->helper->checkLoggedIn();
        $sport = $this->model->getSport($id);
        $this->view->showSport($sport);
    }
    function deleteSport($id){
        $this->helper->checkLoggedIn();
        $this->model->deleteSport($id);
        $this->view->showHomeRedirect();
    }
    function updateSport(){
        $this->helper->checkLoggedIn();
        $this->model->updateSport($_POST['id'], $_POST['deporte'],$_POST['categoria'],$_POST['genero']);
        $this->view->showHomeRedirect();
    }

}