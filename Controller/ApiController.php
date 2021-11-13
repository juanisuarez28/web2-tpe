<?php
require_once 'Model/PlayersModel.php';
require_once 'View/ApiView.php';
require_once 'Helpers/AuthHelper.php';

class ApiController{
    private $playersModel;
    private $view;
    private $data;

    function __construct(){
        $this->playersModel = new PlayersModel();
        $this->view=new ApiView();
        $this->data = file_get_contents("php://input"); 
    }

    function getPlayers(){
        $players = $this->playersModel->getPlayers();
        return $this->view->response($players, 200);
    }

    function getPlayer($params=null){
        $idPlayer=$params[":ID"];
        $player=$this->playersModel->getPlayer($idPlayer);
        if($player){
            return $this->view->response($player, 200);
        }else{
            return $this->view->response("El jugador con el id=$idPlayer no existe", 404);
        }
    }

    function createPlayer($params=null){
         $body=$this->getBody();
         if($body){
            $this->playersModel->insertPlayer($body->nombre, $body->id_deporte, $body->dni, $body->telefono, $body->cuota_mensual);
            $this->view->response("El jugador se inserto con éxito", 200);
        }else{
            $this->view->response("El jugador no se pudo insertar", 500);
        }
    }

    function getBody(){
        return json_decode($this->data); 
    }

    function deletePlayer($params=null){
        $playerId = $params[':ID'];
        $player=$this->playersModel->getPlayer($playerId);
        if($player){
            $this->playersModel->deletePlayer($playerId);
            $this->view->response("Jugador con id=$playerId eliminado con exito", 200);
        }
        else {
            $this->view->response("player id=$playerId not found", 404);
        }
    }

    function updatePlayer($params = null){
        $playerId = $params[':ID'];
        $player = $this->playersModel->getPlayer($playerId);
        if($player){
            $body = $this->getBody();
            $nombre = $body->nombre;
            $id_deporte = $body->id_deporte;
            $dni = $body->dni;
            $telefono = $body->telefono;
            $cuota_mensual = $body->cuota_mensual;
            $player = $this->playersModel->updatePlayerWithApi($playerId, $nombre, $id_deporte, $dni, $telefono, $cuota_mensual);
            $this->view->response("Player id=$playerId actualizado con exito", 200);
        }else{
            $this->view->response("Player id=$playerId not found", 404);
        }
    }
}
