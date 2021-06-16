<?php
namespace Model;
use FFI\Exception;
require_once '../config/database.php';

class Boletines{

    private $id;
    private $n_boletin;
    private $foto1;
    private $foto2;
    private $titulo;
    private $desc_breve;
    private $desc_completa;
    private $fecha_i;
    private $fecha_f;

    
    public function setFechaFinal($fecha){
        $this->fecha_f = $fecha;
    }

    public function getFechaFinal(){
        return $this->fecha_f;
    }
    public function setFechaInicio($fecha){
        $this->fecha_i = $fecha;
    }

    public function getFechaInicio(){
        return $this->fecha_i;
    }
    public function setDescCompleta($des){
        $this->desc_completa = $des;
    }

    public function getDescCompleta(){
        return $this->desc_completa;
    }
    public function setDescBreve($desc){
        $this->desc_breve = $desc;
    }

    public function getDescBreve(){
        return $this->desc_breve;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setFoto2($foto){
        $this->foto2 = $foto;
    }

    public function getFoto2(){
        return $this->foto2;
    }
    public function setFoto1($foto){
        $this->foto1 = $foto;
    }

    public function getFoto1(){
        return $this->foto1;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNBoletin($n_boletin){
        $this->n_boletin = $n_boletin;
    }

    public function getNBoletin(){
        return $this->n_boletin;
    }



    public function showPropiertiesAll(){
        try{
            $conn = conectar();
            $stmt = $conn->prepare('SELECT * FROM `tbboletin` ORDER BY FFinal DESC;');
            $stmt->execute();
            $res = $stmt->get_result();

            if($res){
                return $res;
            }else{
                return false;
            }
        }catch(Exception $e){
            $e->getMessage();
        }
        $conn->close();
        $stmt->close();
    }

    public function showPropiertiesOneBoletin(){
        try{
            $conn = conectar();
            $stmt = $conn->prepare('SELECT * FROM tbboletin WHERE Id = ?;');
            $stmt->bind_param('i',$this->id);
            $stmt->execute();
            $res = $stmt->get_result();
            $fetch = $res->fetch_assoc();
            if($fetch){
                return $fetch;
            }else{
                return false;
            }

        }catch(Exception $e){
            $e->getMessage();
        }
        $conn->close();
        $stmt->close();
    }

    public function createBoletin(){

        try{
            $conn = conectar();
            $stmt  = $conn->prepare('INSERT INTO tbboletin (Nboletin, Foto1,Foto2,Titulo,DescBreve,DescCompleta,FIngreso,FFinal) VALUES (?,?,?,?,?,?,?,?);');
            $stmt->bind_param('ssssssss',$this->n_boletin,$this->foto1,$this->foto2,$this->titulo,$this->desc_breve,$this->desc_completa,$this->fecha_i,$this->fecha_f);
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
        $stmt->close();
    }

    public function deleteBoletin(){
        try{
            $conn = conectar();

            $stmt = $conn->prepare('DELETE FROM tbboletin where Id = ?;');
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
        $stmt->close();
    }

    public function updateBoletin(){
        try{
            $conn = conectar();

            $stmt = $conn->prepare('UPDATE tbboletin SET Nboletin=?, Foto1=?, Foto2=?, Titulo=?, DescBreve=?, DescCompleta=?, FFinal=?   WHERE Id=?;');
            $stmt->bind_param('sssssssi',$this->n_boletin,$this->foto1,$this->foto2,$this->titulo,$this->desc_breve,$this->desc_completa,$this->fecha_f,$this->id);
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
        $stmt->close();
    }

    //Mostrar boletines en el index
    public function showExist(){
        try{
            $conn  = conectar();
            $stmt = $conn->prepare('SELECT * FROM tbboletin where FFinal >= curdate();');
            $stmt->execute();
            $res = $stmt->get_result();
            if($res){
                return $res;
            }else{
                return false;
            }
        }catch(Exception $e){
            $e->getMessage();
        }

        $conn->close();
        $stmt->close();
    }
}