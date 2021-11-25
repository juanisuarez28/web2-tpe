<?php

class AuthHelper{
    function __construct(){
        
    }
    function checkLoggedIn(){
        if(!isset($_SESSION['username'])){
            return false;
        }else{
            return true;
        }
    }   
    function checkRol(){
        session_start();
        if($this->checkLoggedIn()){
            if(($_SESSION['rol'])=="mod"){
                return "mod";
            }else{
                return "standard";
            }
        }
        else{
            return "notLogged";
        }
    }
    function checkLogout(){
        session_start();
        if(isset($_SESSION['username'])){
            header("Location: ".BASE_URL."home");
        }
    }
}