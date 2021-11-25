<?php
require_once 'View/LoginView.php';
require_once 'Model/UsersModel.php';
require_once 'Helpers/AuthHelper.php';

class LoginController{
    private $loginView;
    private $model;
    private $helper;

    function __construct(){
        $this->loginView= new LoginView();
        $this->model= new UsersModel();
        $this->helper=new AuthHelper();    
    }

    function showLogin(){
        $this->loginView->showLogin(); 
    }

    function ShowCheckIn(){
        $this->loginView->ShowCheckIn();
    }

    function logout(){
        session_start();
        session_destroy();
        header("Location: ".BASE_URL."home");
    }

    function checkIn(){
        $user_password=password_hash($_POST['password'], PASSWORD_BCRYPT);
        $this->model->registerUser($_POST['username'],$user_password);
        $this->verifyLogin();
    }
    
    function verifyLogin(){
        session_start();
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $user=$_POST['username'];
            $user_password = $_POST['password'];
            $user=$this->model->getUser($user);

            if($user && password_verify($user_password,($user->userpassword))){
                $_SESSION['username']=$user;
                $rol = $user->rol;
                $_SESSION['rol']=$rol;
                // se debe pasar el header para que redirija a /home, sino queda en verify
                header("Location: ".BASE_URL."home");
            }
            else{
                $this->loginView->showLogin("Acceso denegado");
            }
        }
    }
}