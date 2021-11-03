<?php

namespace Controllers;
use MVC\Router;
use Model;
class ConocenosController{

    public static function index(Router $router){

        //$boletin = new Model\Boletines();
        //$bol = $boletin->showExist();

        //$slider = new Model\Sliders();
        //$slid = $slider->showExist();


    $router->render('/nosotros/principal'/*['boletines' =>$bol, 'sliders' => $slid]*/);
    }

    public static function vision(Router $router){
        $router->render('/nosotros/vision');
    }

    public static function valores(Router $router){
        $router->render('/nosotros/valores');
    }

    public static function calidad(Router $router){
        $router->render('/nosotros/calidad');
    }

    public static function organigrama(Router $router){
        $router->render('/nosotros/organigrama');
    }

    public static function directorio(Router $router){
        $router->render('/nosotros/directorio');
    }

    public static function avisos(Router $router){
        $router->render('/nosotros/avisos');
    }

    public static function normateca(Router $router){
        $router->render('/nosotros/normateca');
    }

}