<?php
require_once 'Model/CommentsModel.php';
require_once 'View/ApiView.php';
require_once 'Helpers/AuthHelper.php';

class ApiCommentsController{
    private $view;
    private $model;

    function __construct(){
        $this->view=new ApiView();
        $this->model = new CommentsModel;
    }

    function getComments($params=null){
        $idPlayer=$params[":ID"];
        $comments=$this->model->getComments($idPlayer);
        if($comments){
            return $this->view->response($comments, 200);
        }
        else{
            return $this->view->response(null, 204);
        }
    }
    function createComment($params=null){
        $body=$this->getBody();
        $comentario=$body->comentario;
        $puntaje=$body->puntaje;
        $id_jugador=$body->id_jugador;

        if($body){
            $this->model->createComment($comentario, $puntaje, $id_jugador);
            $this->view->response("El comentario se inserto con éxito", 200);
        }else{
           return $this->view->response("El comentario nos se pudo insertar", 404);
        }
    }

    function deleteComment($params=null){
        $comment_id = $params[':ID'];
        var_dump($comment_id);
        $comment=$this->model->getCommentById($comment_id);
        if($comment){
            $this->model->deleteComment($comment_id);
            $this->view->response("Comentario con id=$comment_id eliminado con exito", 200);
        }
        else {
            $this->view->response("comment id=$comment_id not found", 404);
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
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString); 
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
}
