<?php
namespace Model;
use FFI\Exception;
include '../config/database.php';

class Sliders{

    private $id;
    private $estado;
    private $NSliders;
    private $imagen;
    private $Archivo;
    private $Url;
    private $titulo;
    private $fecha_i;
    private $fecha_f;

    public function setArchivo($archivo){
        $this->Archivo = $archivo;
    }

    public function getArchivo(){
        return $this->Archivo;
    }
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
    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getEstado(){
        return $this->estado;
    }
    public function setNSlider($slider){
        $this->NSliders = $slider;
    }

    public function getNSlider(){
        return $this->NSliders;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setImagen($imagen){
        $this->imagen = $imagen;
    }

    public function getImagen(){
        return $this->imagen;
    }
    public function setUrl($url){
        $this->Url = $url;
    }

    public function getUrl(){
        return $this->Url;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

   


    public function showPropiertiesAll(){
        try{
            $conn = conectar();
            $stmt = $conn->prepare('SELECT * FROM tbsliders ORDER BY Estado;');
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

    public function showPropiertiesOneSlider(){
        try{
            $conn = conectar();
            $stmt = $conn->prepare('SELECT * FROM tbsliders WHERE Id = ?;');
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

    public function updateSlider(){
        try{
            $conn = conectar();
            $stmt = $conn->prepare('UPDATE tbsliders SET NSliders=?, Imagen=?, Archivo=?, Url=?, Titulo=?, FFinal=?, Estado = ?  WHERE Id=?;');
            $stmt->bind_param('sssssssi',$this->NSliders,$this->imagen,$this->Archivo,$this->Url,$this->titulo,$this->fecha_f,$this->estado , $this->id);
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
}