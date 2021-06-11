<?php
namespace Model;
use FFI\Exception;
include '../config/database.php';

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
            $stmt = $conn->prepare('SELECT * FROM tbboletin');
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
    }
}