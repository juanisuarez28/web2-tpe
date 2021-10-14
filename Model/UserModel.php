<?php

class UserModel{
    private $db;

    function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=club_deportivo;charset=utf8', 'root', '');
    }
    function getUser($user){
        //obtengo el usuario de la base de datos
        $query=$this->db->prepare("SELECT * FROM  users WHERE username = ?");
        $query->execute([$user]);
        $user= $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
    function registerUser($username, $password){
        $sentencia = $this->db->prepare("INSERT INTO users(username, userpassword) VALUES(?,?)");
        $sentencia->execute([$username, $password]);
    }
}
    
