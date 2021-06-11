<?php

namespace Controllers;

use MVC\Router;
use Model\Boletines;
class BoletinesController{

    public static function  mostrar(Router $router){
        $boletin = new Boletines();
        $prop = $boletin->showPropiertiesAll();

        $router->render('/boletines/mostrar',['propiedades' => $prop]);
    }
    public static function propiedades(Router $router){

        $router->render('/boletines/propiedades');
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