<?php

class CommentsModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=club_deportivo;charset=utf8', 'root', '');
    }

    function getComments($idPlayer){
        $sentencia= $this->db->prepare("SELECT * from comments WHERE id_jugador=?");
        $sentencia->execute(array($idPlayer));
        $comments = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }

    function getCommentById($comment_id){
        $sentencia= $this->db->prepare("SELECT * from comments WHERE id=?");
        $sentencia->execute(array($comment_id));
        $comment = $sentencia->fetch(PDO::FETCH_OBJ);
        return $comment;
    }
    function deleteComment($comment_id){
        $sentencia = $this->db->prepare("DELETE FROM comments WHERE id=?");   
        $sentencia->execute(array($comment_id));
    }
    function createComment($comentario, $puntaje, $id_jugador){
        $sentencia = $this->db->prepare("INSERT INTO comments(comentario, puntaje, id_jugador) VALUES(?,?,?)");
        $sentencia->execute(array($comentario, $puntaje, $id_jugador));
    }
}