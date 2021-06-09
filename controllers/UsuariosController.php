<?php

namespace Controllers;

use MVC\Router;
use Model\Usuarios;

class UsuariosController{

    public function mostrar(Router $router){
        $user = new Usuarios();
        $datos = $user->showPropiertes();

        $router->render('/usuarios/mostrar',$datos);
    }
}