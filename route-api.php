<?php
require_once 'libs/Router.php';
require_once 'Controller/ApiCommentsController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comments/:ID', 'GET', 'ApiCommentsController', 'getComments');
$router->addRoute('comments', 'POST', 'ApiCommentsController', 'createComment');
$router->addRoute('comments/:ID','DELETE', 'ApiCommentsController', 'deleteComment');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
