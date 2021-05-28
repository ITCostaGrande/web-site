<?php

namespace Controllers;
use MVC\Router;

class OfertaController{

    public static function presencial(Router $router){
        $router->render('/oferta/presencial');
    }

    public static function distancia(Router $router){
        $router->render('/oferta/distancia');
    }

    public static function arquitectura(Router $router){
        $router->render('/oferta/presencial/arquitectura');
    }

    
    public static function cp(Router $router){
        $router->render('/oferta/presencial/cp');
    }

    
    public static function admon(Router $router){
        $router->render('/oferta/presencial/admon');
    }

    
    public static function tics(Router $router){
        $router->render('/oferta/presencial/tics');
    }

    
    public static function isc(Router $router){
        $router->render('/oferta/presencial/isc');
    }

    
    public static function electromecanica(Router $router){
        $router->render('/oferta/presencial/electromecanica');
    }

    public static function ige(Router $router){
        $router->render('/oferta/presencial/ige');
    }

}