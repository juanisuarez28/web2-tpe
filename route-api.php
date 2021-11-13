<?php
require_once 'libs/Router.php';
require_once 'Controller/ApiController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('players', 'GET', 'ApiController', 'getPlayers');
$router->addRoute('players/:ID', 'GET', 'ApiController', 'getPlayer');
$router->addRoute('players', 'POST', 'ApiController', 'createPlayer');
$router->addRoute('players/:ID', 'DELETE', 'ApiController', 'deletePlayer');
$router->addRoute('players/:ID', 'PUT', 'ApiController', 'updatePlayer');



/*
$router->addRoute('tareas', 'GET', 'ApiTaskController', 'obtenerTareas');
$router->addRoute('tareas', 'POST', 'ApiTaskController', 'crearTarea');
$router->addRoute('tareas/:ID', 'GET', 'ApiTaskController', 'obtenerTarea');
$router->addRoute('tareas/:ID', 'DELETE', 'ApiTaskController', 'eliminarTarea');
$router->addRoute('tareas/:ID', 'PUT', 'ApiTaskController', 'actualizarTarea');
$router->addRoute('vuelos/:ID', 'GET', 'VuelosController', 'getVuelo');
$router->addRoute('ciudades', 'GET', 'CiudadesController', 'getCiudades');
$router->addRoute('vuelos', 'POST', 'VuelosController', 'postVuelo');*/


// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
