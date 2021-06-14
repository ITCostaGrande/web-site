<?php

namespace Controllers;

use MVC\Router;
use Model\Sliders;

include '../config/funciones.php';

class SlidersController
{

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
            //  echo '<pre>';
            //  var_dump($_POST);
            //  echo '</pre>';

            //  echo '<pre>';
            //  var_dump($_FILES);
            //  echo '</pre>';
            
            $slider = new Sliders();
            $slider->setNSlider($_POST['no']);
            $slider->setTitulo($_POST['titulo']);
            $slider->setFechaFinal($_POST['final']);
            $slider->setFechaInicio(date('Y-m-d'));
            $slider->setUrl($_POST['url']);
            $slider->setEstado($_POST['estado']);
            $slider->setImagen($_FILES['foto1']['name']);
            $slider->setArchivo($_FILES['archivo']['name']);
            $carpeta = '../public/sliders_save/';

            //mover la imagen
            move_uploaded_file($_FILES['foto1']['tmp_name'], $carpeta . $_FILES['foto1']['name']);
            if ($_FILES['archivo']['name']) {
                move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta . $_FILES['archivo']['name']);
            }
             
            if($slider->createSlider()){
                header('Location:/sliders/mostrar');
            }else{
                echo '<p>Ocurrió un error !! </p>';
            }
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

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $carpeta = '../public/sliders_save/';

            $slider->setNSlider($_POST['no']);
            $slider->setUrl($_POST['url']);
            $slider->setTitulo($_POST['titulo']);
            $slider->setFechaFinal($_POST['final']);
            $slider->setEstado($_POST['estado']);
            if ($_FILES['foto1']['name'] || $_FILES['archivo']['name']) {

                if ($_FILES['foto1']['name'] && $_FILES['archivo']['name']) {

                    //mover la imagen
                    move_uploaded_file($_FILES['foto1']['tmp_name'], $carpeta . $_FILES['foto1']['name']);
                    move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta . $_FILES['archivo']['name']);
                    unlink($carpeta . $prop['Imagen']);
                    unlink($carpeta . $prop['Archivo']);
                    $slider->setImagen($_FILES['foto1']['name']);
                    $slider->setArchivo($_FILES['archivo']['name']);
                } else if ($_FILES['foto1']['name']) {
                    move_uploaded_file($_FILES['foto1']['tmp_name'], $carpeta . $_FILES['foto1']['name']);
                    unlink($carpeta . $prop['Imagen']);
                    $slider->setImagen($_FILES['foto1']['name']);
                    $slider->setArchivo($prop['Archivo']);
                } else {
                    move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta . $_FILES['archivo']['name']);
                    unlink($carpeta . $prop['Archivo']);
                    $slider->setArchivo($_FILES['archivo']['name']);
                    $slider->setImagen($prop['Imagen']);
                }
            } else {
                $slider->setImagen($prop['Imagen']);
                $slider->setArchivo($prop['Archivo']);
            }

            if ($slider->updateSlider()) {
                header('Location:/sliders/mostrar');
            } else {
                echo '<p>Ocurrió algun error!! </p>';
            }
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
            $carpeta = '../public/sliders_save/';
            unlink($carpeta . $prop['Imagen']);
            unlink($carpeta . $prop['Archivo']);
            $slider->deleteSlider();
            header('Location:/sliders/mostrar');
        }
    }
}
