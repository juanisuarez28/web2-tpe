<?php
require_once 'View/LoginView.php';
require_once 'Model/UserModel.php';
require_once 'Helpers/AuthHelper.php';

class LoginController{
    private $loginView;
    private $model;
    private $helper;

    function __construct(){
        $this->loginView= new LoginView();
        $this->model= new UserModel();
        $this->helper=new AuthHelper();    
    }

    function showLogin(){
        $this->helper->checkLogout();
        $this->loginView->showLogin(); 
    }

    function ShowCheckIn(){
        $this->loginView->ShowCheckIn();
    }

    function logout(){
        session_start();
        session_destroy();
        //tendria que llevara header login
        header("Location: ".BASE_URL."login");
    }

    function checkIn(){
        $user_password=password_hash($_POST['password'], PASSWORD_BCRYPT);
        $this->model->registerUser($_POST['username'],$user_password);
        $this->loginView->showLogin();
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