<?php

class AuthHelper{
    function __construct(){
        
    }
    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['username'])){
            header("Location: ".BASE_URL."login");
        }
    }   
    function checkRol(){
        if(($_SESSION['rol'])=="standard"){
            return "standard";
        }else{
          return "mod";
        }
    }
    function checkLogout(){
        session_start();
        if(isset($_SESSION['username'])){
            header("Location: ".BASE_URL."home");
        }
    }
}