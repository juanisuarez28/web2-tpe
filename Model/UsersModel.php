<?php

class UsersModel{
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
    function getUsers(){
        $sentencia= $this->db->prepare("SELECT * from users");
        $sentencia->execute();
        $users = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }
    function deleteUser($username){
        $sentencia = $this->db->prepare("DELETE FROM users WHERE username=?");   
        $sentencia->execute(array($username));
    }
    function updateRol($username, $rol){
        $sentencia = $this->db->prepare("UPDATE users SET rol=? WHERE username=?");  
        $sentencia->execute(array($rol, $username));
    }
}
    
