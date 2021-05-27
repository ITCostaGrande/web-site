<?php

namespace Controllers;
use MVC\Router;

class BecasController{

    public static function resultados(Router $router){
        $router->render('/becas/resultados');
    }
}