<?php
require_once("Model/UsersModel.php");
require_once("View/UsersView.php");
class UsersController
{
    private $model;
    private $view;
    private $helper;


    function __construct()
    {
        $this->model = new UsersModel();
        $this->view = new UsersView();
        $this->helper = new AuthHelper();
    }
    function getUsers() {
        $rol = $this->helper->checkRol();
        $users = $this->model->getUsers();
        if ($rol == "mod") {
            $this->view->showUsersMod($users);
        } else {
            $this->view->showUsersNotMod($users);
        }
    }
    function deleteUser($username){
        $rol = $this->helper->checkrol();
        if ($rol == "mod") {
            $user = $this->model->getUser($username);
            if ($user) {
                $this->model->deleteUser($username);
               /* $users = $this->model->getUsers();
                $this->view->showUsersMod($users);
                */
                header("Location: ".BASE_URL."users");
            }
        }
    }
    function updateRol($username, $newRol){
        $rol = $this->helper->checkrol();
        if ($rol == "mod") {
            $this->model->updateRol($username, $newRol);
           /* $users = $this->model->getUsers();
            $this->view->showUsersMod($users);
            */
            header("Location: ".BASE_URL."users");
        }
    }
}