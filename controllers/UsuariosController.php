<?php

namespace Controllers;

use MVC\Router;
use Model\Usuarios;

class UsuariosController{

    public static function mostrar(Router $router){
        $user = new Usuarios();
        $propiedades = $user->showPropiertes();

        $router->render('/usuarios/mostrar',['propiedades'=>$propiedades]);
    }

    public static function panel(Router $router){
        $user = new Usuarios();
        $propiedades = $user->showPropiertes();

        $router->render('/usuarios/panel',['propiedades'=>$propiedades]);
    }

    public static function login(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }

        $router->render('/usuarios/login');
    }
}