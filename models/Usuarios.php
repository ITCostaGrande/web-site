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
    
    
    public function showPropiertes(){
        try{
            $conn = conectar();
            $stmt =  $conn->prepare("SELECT * FROM tbusuarios;");
            $stmt->execute();
            $resultado = $stmt->get_result();
            $fetch = $resultado->fetch_assoc();
            if($fetch){
                return $fetch;
            }else{
                return false;
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }


}