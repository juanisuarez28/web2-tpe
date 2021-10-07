<?php

class SportModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=club_deportivo;charset=utf8', 'root', '');
    }

    function getSports(){
        $sentencia= $this->db->prepare("SELECT * FROM deportes");
        $sentencia->execute();
        $sports = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $sports;
    }
    function getSport($id){
        $sentencia= $this->db->prepare("SELECT * FROM deportes WHERE id_deporte=?");
        $sentencia->execute(array($id));
        $sport = $sentencia->fetch(PDO::FETCH_OBJ);
        return $sport;
    }
    function insertSport($sport, $category, $gender){
        $sentencia = $this->db->prepare("INSERT INTO deportes(deporte, categoria, genero) VALUES(?,?,?)");
        $sentencia->execute(array($sport, $category, $gender));
    }
    function deleteSport($id){
        $sentencia = $this->db->prepare("DELETE FROM deportes WHERE id_deporte=?");   
        $sentencia->execute(array($id));
    }
    function updateSport($id, $deporte, $categoria, $genero){
        $sentencia = $this->db->prepare("UPDATE deportes SET deporte='$deporte', categoria='$categoria', genero='$genero' WHERE id_deporte='$id'");  
        $sentencia->execute();
    }

}