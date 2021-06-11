<?php

namespace Controllers;

use MVC\Router;
use Model\Boletines;
include '../config/funciones.php';
class BoletinesController{

    public static function  mostrar(Router $router){
        $boletin = new Boletines();
        $prop = $boletin->showPropiertiesAll();

        $router->render('/boletines/mostrar',['propiedades' => $prop]);
    }
    public static function propiedades(Router $router){
        $id = $_GET['recordID'];
        if(verificarGET($id,'/boletines/mostrar')){
            $boletin = new Boletines();
            $boletin->setId($id);
            $prop = $boletin->showPropiertiesOneBoletin();
        }
        $router->render('/boletines/propiedades',['row_Recordset' => $prop]);
    }

    public static function  agregar(Router $router){
        

        $router->render('/boletines/agregar');
    }

    public static function  modificar(Router $router){
        

        $router->render('/boletines/modificar');
    }

    public static function  eliminar(Router $router){
        

    
    }
}