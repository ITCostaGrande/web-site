<?php

namespace Controllers;

use MVC\Router;

class AspirantesController{


    public static function fichas(Router $router){
        $router->render('/aspirantes/fichas');
    }

    public static function formatos(Router $router){
        $router->render('/aspirantes/formatos');
    }


}