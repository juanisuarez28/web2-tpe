<?php

class PlayersModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=club_deportivo;charset=utf8', 'root', '');
    }
    
    function getPlayers(){
        $sentencia= $this->db->prepare("SELECT * from jugadores");
        $sentencia->execute();
        $players = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $players;
    }

    function getPlayer($id){
        $sentencia= $this->db->prepare("SELECT * from jugadores WHERE id=?");
        $sentencia->execute(array($id));
        $player = $sentencia->fetch(PDO::FETCH_OBJ);
        return $player;
    }

    private function uploadImage($image){
        $target = "images/" . uniqid() . "." . strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));  
        move_uploaded_file($image['tmp_name'], $target);
        return $target;
    }

    function insertPlayer($nombre, $id_deporte, $dni, $telefono, $cuota, $imagen = null){
        $pathImg = null;
        if ($imagen)
            $pathImg = $this->uploadImage($imagen);

        $sentencia = $this->db->prepare("INSERT INTO jugadores(nombre, id_deporte, dni, telefono, cuota_mensual, imagen) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($nombre, $id_deporte, $dni, $telefono, $cuota, $pathImg));

        return $this->db->lastInsertId();
    }

    function deletePlayer($id){
        $sentencia = $this->db->prepare("DELETE FROM jugadores WHERE id=?");   
        $sentencia->execute(array($id));
    }

    function updatePlayer($anteriornombre,$nombre, $dni, $telefono, $cuota, $sport){
        $sentencia = $this->db->prepare("UPDATE jugadores SET nombre=?,dni=?, telefono=?, cuota_mensual=?, id_deporte= ? WHERE nombre=?");
        $sentencia->execute(array($nombre, $dni, $telefono, $cuota, $sport, $anteriornombre));
    }

    function updatePlayerWithApi($playerId, $nombre, $id_deporte, $dni, $telefono, $cuota_mensual){
        $sentencia = $this->db->prepare("UPDATE jugadores SET nombre=?,dni=?, telefono=?, cuota_mensual=?, id_deporte= ? WHERE id=?");
        $sentencia->execute(array($nombre, $dni, $telefono, $cuota_mensual, $id_deporte, $playerId));
    }

    function getPlayersOfSport($id){
        $sentencia= $this->db->prepare("SELECT * from jugadores WHERE id_deporte=?");
        $sentencia->execute(array($id));
        $players = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $players;    
    }
}