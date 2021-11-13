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
    function insertPlayer($nombre, $id_deporte, $dni, $telefono, $cuota){
        $sentencia = $this->db->prepare("INSERT INTO jugadores(nombre, id_deporte, dni, telefono, cuota_mensual) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($nombre, $id_deporte, $dni, $telefono, $cuota));
    }
    function deletePlayer($id){
        $sentencia = $this->db->prepare("DELETE FROM jugadores WHERE id=?");   
        $sentencia->execute(array($id));
    }
    function updatePlayer($anteriornombre,$nombre, $dni, $telefono, $cuota, $sport){
        $sentencia = $this->db->prepare("UPDATE jugadores SET nombre='$nombre',dni='$dni', telefono='$telefono', cuota_mensual='$cuota', id_deporte= '$sport' WHERE nombre='$anteriornombre'");
        $sentencia->execute();
    }
    function updatePlayerWithApi($playerId, $nombre, $id_deporte, $dni, $telefono, $cuota_mensual){
        $sentencia = $this->db->prepare("UPDATE jugadores SET nombre='$nombre',dni='$dni', telefono='$telefono', cuota_mensual='$cuota_mensual', id_deporte= '$id_deporte' WHERE id='$playerId'");
        $sentencia->execute();
    }
    function getPlayersOfSport($id){
        $sentencia= $this->db->prepare("SELECT * from jugadores WHERE id_deporte=?");
        $sentencia->execute(array($id));
        $players = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $players;    
    }
}