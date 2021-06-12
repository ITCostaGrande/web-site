<?php

namespace Controllers;

use MVC\Router;
use Model\Boletines;

include '../config/funciones.php';
class BoletinesController
{

    public static function  mostrar(Router $router)
    {
        $boletin = new Boletines();
        $prop = $boletin->showPropiertiesAll();

        $router->render('/boletines/mostrar', ['propiedades' => $prop]);
    }
    public static function propiedades(Router $router)
    {
        $id = $_GET['recordID'];
        if (verificarGET($id, '/boletines/mostrar')) {
            $boletin = new Boletines();
            $boletin->setId($id);
            $prop = $boletin->showPropiertiesOneBoletin();
        }
        $router->render('/boletines/propiedades', ['row_Recordset' => $prop]);
    }

    public static function  agregar(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $boletin = new Boletines();
            $boletin->setNBoletin($_POST['no']);
            $boletin->setTitulo($_POST['titulo']);
            $boletin->setDescCompleta($_POST['desc-completa']);
            $boletin->setDescBreve($_POST['desc-breve']);
            $boletin->setFechaInicio(date('Y-m-d'));
            $boletin->setFechaFinal($_POST['final']);
            $boletin->setFoto1($_FILES['foto1']['name']);
            $boletin->setFoto2($_FILES['foto2']['name']);

            $carpeta = '../public/boletines_save/';

            //mover la imagen
            move_uploaded_file($_FILES['foto1']['tmp_name'], $carpeta . $_FILES['foto1']['name']);
            move_uploaded_file($_FILES['foto2']['tmp_name'], $carpeta . $_FILES['foto2']['name']);


            if ($boletin->createBoletin()) {
                header('Location:/boletines/mostrar');
            } else {
                echo '<p> Existe algun error</p>';
            }
        }

        $router->render('/boletines/agregar');
    }

    public static function  modificar(Router $router)
    {
        $id = $_GET['recordID'];
        if (verificarGET($id, '/boletines/mostrar')) {
            $boletin = new Boletines();
            $boletin->setId($id);
            $prop = $boletin->showPropiertiesOneBoletin();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // echo '<pre>';
            // var_dump($_POST);
            // echo '</pre>';

            // echo '<pre>';
            // var_dump($_FILES);
            // echo '</pre>';
            // echo '<pre>';
            // var_dump($prop);
            // echo '</pre>';
            $carpeta = '../public/boletines_save/';
            $boletin->setNBoletin($_POST['no']);
            $boletin->setTitulo($_POST['titulo']);
            $boletin->setDescBreve($_POST['desc-breve']);
            $boletin->setDescCompleta($_POST['desc-completa']);
            $boletin->setFechaFinal($_POST['final']);

            if ($_FILES['foto1']['name'] || $_FILES['foto2']['name']) {

                if ($_FILES['foto1']['name'] && $_FILES['foto2']['name']) {

                    //mover la imagen
                    move_uploaded_file($_FILES['foto1']['tmp_name'], $carpeta . $_FILES['foto1']['name']);
                    move_uploaded_file($_FILES['foto2']['tmp_name'], $carpeta . $_FILES['foto2']['name']);
                    unlink($carpeta . $prop['Foto1']);
                    unlink($carpeta . $prop['Foto2']);
                    $boletin->setFoto1($_FILES['foto1']['name']);
                    $boletin->setFoto2( $_FILES['foto2']['name']);
                } else if ($_FILES['foto1']['name']) {
                    move_uploaded_file($_FILES['foto1']['tmp_name'], $carpeta . $_FILES['foto1']['name']);
                    unlink($carpeta . $prop['Foto1']);
                    $boletin->setFoto1($_FILES['foto1']['name']);
                    $boletin->setFoto2($prop['Foto2']);
                } else {
                    move_uploaded_file($_FILES['foto2']['tmp_name'], $carpeta . $_FILES['foto2']['name']);
                    unlink($carpeta . $prop['Foto2']);
                    $boletin->setFoto2( $_FILES['foto2']['name']);
                    $boletin->setFoto1($prop['Foto1']);
                }
            } else {
                $boletin->setFoto1($prop['Foto1']);
                $boletin->setFoto2($prop['Foto2']);
            }

            $boletin->updateBoletin();

            header('Location:/boletines/mostrar');

        }
        $router->render('/boletines/modificar', ['row' => $prop]);
    }

    public static function  eliminar(Router $router)
    {
        $id = $_GET['recordID'];
        if (verificarGET($id, '/boletines/mostrar')) {

            $boletin = new Boletines();
            $boletin->setId($id);
            $prop = $boletin->showPropiertiesOneBoletin();
            $carpeta = '../public/boletines_save/';
            unlink($carpeta . $prop['Foto1']);
            unlink($carpeta . $prop['Foto2']);
            $boletin->deleteBoletin();
            header('Location:/boletines/mostrar');
        }
    }
}
