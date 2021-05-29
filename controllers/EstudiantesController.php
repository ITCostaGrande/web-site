<?php

namespace Controllers;

use MVC\Router;

class EstudiantesController{

    public static function reinscripcion(Router $router){
        $router->render('/estudiantes/reinscripcion');
    }

    public static function actComplementarias(Router $router){
        $router->render('/estudiantes/complementarias');
    }

    public static function servicioSocial(Router $router){
        $router->render('/estudiantes/servicio_social');
    }

    public static function titulacion(Router $router){
        $router->render('/estudiantes/titulacion');
    }

    public static function egresados(Router $router){
        $router->render('/estudiantes/egresados');
    }

    public static function bolsa(Router $router){
        $router->render('/estudiantes/bolsa');
    }

    public static function buzon(Router $router){
        $router->render('/estudiantes/buzon');
    }

    public static function lineamientos(Router $router){
        $router->render('/estudiantes/lineamientos');
    }

    public static function reglamentos(Router $router){
        $router->render('/estudiantes/reglamentos');
    }

    public static function bibliotecaDigital(Router $router){
        $router->render('/estudiantes/biblioteca_digital');
    }

    public static function extraescolares(Router $router){
        $router->render('/estudiantes/extraescolares');
    }

    public static function cisco(Router $router){
        $router->render('/estudiantes/cisco');
    }

    public static function encuestas(Router $router){
        $router->render('/estudiantes/encuestas');
    }
    public static function residencias(Router $router){
        $router->render('/estudiantes/residencias');
    }
}