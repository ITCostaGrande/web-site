<?php
namespace Model;
use FFI\Exception;
include '../config/database.php';
class Usuarios{

    private $id;
    private $login;
    private $nombre;
    private $paterno;
    private $materno;
    private $pass;
    private $email;
    private $nivel;
    
    public function setNivel($nivel){
        $this->nivel = $nivel;
    }

    public function getNivel(){
        return $this->nivel;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setPass($pass){
        $this->pass = $pass;
    }

    public function getPass(){
        return $this->pass;
    }
    public function setMaterno($materno){
        $this->materno = $materno;
    }

    public function getMaterno(){
        return $this->materno;
    }
    public function setPaterno($paterno){
        $this->paterno = $paterno;
    }

    public function getPaterno(){
        return $this->paterno;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getLogin(){
        return $this->login;
    }

    public function login(){
        try{
            $conn = conectar();
            $stmt= $conn->prepare('SELECT IdUsuario from ffinal where login = ? and password = ?');
            $stmt->bind_param('ss',$this->login,$this->pass);
            $stmt->execute();
            $res = $stmt->get_result();
            $fetch = $res->fetch_assoc();
            if($fetch){
                session_start();
                $_SESSION['id'] = $fetch['IdUsuario'];
                $_SESSION['login'] = true;
                return true;

            }else{
                return false;
            }

        }catch(Exception $e){
            $e->getMessage();
        }
        $conn->close();
    }
    
    
    public function showPropiertesAllUsers(){
        try{
            $conn = conectar();
            $stmt =  $conn->prepare("SELECT * FROM ffinal;");
            $stmt->execute();
            $resultado = $stmt->get_result();
            if($resultado){
                return $resultado;
            }else{
                return false;
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
        $conn->close();
    }

    public function showPropiertesUser(){
        try{
            $conn = conectar();
            $stmt =  $conn->prepare("SELECT * FROM ffinal where IdUsuario = ?;");
            $stmt->bind_param('i',$this->id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $fetch = $resultado->fetch_assoc();
            if($resultado){
                return $fetch;
            }else{
                return false;
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
        $conn->close();
    }

    public function createUser(){
        try{
            $conn = conectar();
            $stmt = $conn->prepare('INSERT INTO ffinal (login, nombre, apaterno, amaterno, password, email, nivel) VALUES (?,?,?,?,?,?,?)');
            $stmt->bind_param('sssssss',$this->login,$this->nombre, $this->paterno, $this->materno, $this->pass,$this->email,$this->nivel);
            $stmt->execute();
            if($stmt->affected_rows > 0 ){
                return true;
            }else{
                return false;
            }

        }catch(Exception $e){
            $e->getMessage();
        }

        $conn->close();
    }

    public function updateUser(){
        try{
            $conn = conectar();
            $stmt = $conn->prepare('UPDATE ffinal set login = ?, nombre = ?, apaterno = ?, amaterno = ?, password = ?, email = ?, nivel = ? WHERE IdUsuario = ?');
            $stmt->bind_param('sssssssi',$this->login,$this->nombre, $this->paterno, $this->materno, $this->pass,$this->email,$this->nivel,$this->id);
            $stmt->execute();
            if($stmt->affected_rows > 0 ){
                return true;
            }else{
                return false;
            }

        }catch(Exception $e){
            $e->getMessage();
        }

        $conn->close();
    }

    public function deleteUser(){
        try{
            $conn = conectar();
            $stmt = $conn->prepare('DELETE FROM ffinal WHERE IdUsuario = ?');
            $stmt->bind_param('i',$this->id);
            $stmt->execute();
            if($stmt->affected_rows > 0){
                return true;
            }else{
                return false;
            }
        }catch(Exception $e){
            $e->getMessage();
        }

        $conn->close();
    }



}