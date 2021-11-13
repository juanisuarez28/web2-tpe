<?php
require_once "View/IndexView.php"; 
require_once 'Helpers/AuthHelper.php';
class IndexController{
    private $indexView;

    function __construct(){
        $this->indexView = new IndexView();
        $this->helper=new AuthHelper();   
    }
    
    function showHome(){
        $this->indexView->showHome();
    }
}