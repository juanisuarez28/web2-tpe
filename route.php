<?php
require_once "Controller/PlayersController.php";
require_once "Controller/SportController.php";
require_once "Controller/IndexController.php";
require_once "Controller/LoginController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//lee la accion
if(!empty($_GET['action'])){
    $action=$_GET['action'];
}else{
    $action='home';
}

$params= explode('/', $action);

$playersController = new PlayersController();
$sportController = new SportsController();
$indexController = new IndexController();
$loginController= new LoginController();
switch($params[0]){
    case'checkIn':
        $loginController->checkIn();
        break;
    case 'login':
        $loginController->showLogin();
        break;
    case'viewPlayers':
        $playersController->viewPlayers();
        break;
    case'viewSports':
        $sportController->viewSports();
        break;
    case 'logout':
        $loginController->logout();
        break;
    case'showCheckIn':
        $loginController->ShowCheckIn();
        break;
    case 'verify':
        $loginController->verifyLogin();
        break;
    case 'home':
        $indexController->showHome();
        break;
    case 'createPlayer':
        $playersController->createPlayer();
        break;
    case 'deletePlayer':
        $playersController->deletePlayer($params[1]);
        break;
    case 'updatePlayer':
        $playersController->updatePlayer();
        break;
    case 'viewPlayersOfSport':
        $playersController->viewPlayersOfSport($params[1]);
        break;
    case 'viewPlayer':
        $playersController->viewPlayer($params[1]);
        break;
    case'createSport':
        $sportController->createSport();
        break;    
    case'viewSport':
        $sportController->viewSport($params[1]);
        break;
     case'deleteSport':
        $sportController->deleteSport($params[1]);
        break;   
     case 'updateSport':
        $sportController->updateSport($params[1]);
        break;
    default:
        echo('404 Page not found');
        break;
}