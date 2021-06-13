<?php

namespace Controllers;
use MVC\Router;
use Model\Sliders;

include '../config/funciones.php';

class SlidersController{

    public static function  mostrar(Router $router)
    {
        $slider = new Sliders();
        $prop = $slider->showPropiertiesAll();

        $router->render('/sliders/mostrar', ['propiedades' => $prop]);
    }

    public static function propiedades(Router $router)
    {
        $id = $_GET['recordID'];
        if (verificarGET($id, '/boletines/mostrar')) {
            $slider = new Sliders();
            $slider->setId($id);
            $prop = $slider->showPropiertiesOneSlider();
        }
        $router->render('/sliders/propiedades', ['row_Recordset' => $prop]);
    }

    public static function  agregar(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $carpeta = '../public/boletines_save/';

            //mover la imagen
            move_uploaded_file($_FILES['foto1']['tmp_name'], $carpeta . $_FILES['foto1']['name']);
            move_uploaded_file($_FILES['foto2']['tmp_name'], $carpeta . $_FILES['foto2']['name']);


        }

        $router->render('/sliders/agregar');
    }

    public static function  modificar(Router $router)
    {
        $id = $_GET['recordID'];
        if (verificarGET($id, '/boletines/mostrar')) {
            $slider = new Sliders();
            $slider->setId($id);
            $prop = $slider->showPropiertiesOneSlider();
        }

        
            
        $router->render('/sliders/modificar', ['row' => $prop]);
    }

    public static function  eliminar(Router $router)
    {
        $id = $_GET['recordID'];
        if (verificarGET($id, '/sliders/mostrar')) {

            $slider = new Sliders();
            $slider->setId($id);
            $prop = $slider->showPropiertiesOneSlider();
            $carpeta = '../public/boletines_save/';
            unlink($carpeta . $prop['Foto1']);
            unlink($carpeta . $prop['Foto2']);
            $slider->deleteBoletin();
            header('Location:/sliders/mostrar');
        }
    }
}