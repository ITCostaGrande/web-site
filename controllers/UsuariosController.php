<?php

namespace Controllers;

use MVC\Router;
use Model\Usuarios;
include '../config/funciones.php';
class UsuariosController
{

    public static function mostrar(Router $router)
    {
        $user = new Usuarios();
        $propiedades = $user->showPropiertesAllUsers();

        $router->render('/usuarios/mostrar', ['propiedades' => $propiedades]);
    }

    public static function panel(Router $router)
    {

        $router->render('/usuarios/panel');
    }

    public static function login(Router $router)
    {
        $user = new Usuarios();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user->setLogin($_POST['login']);
            $user->setPass($_POST['pass']);
            if ($user->login()) {
                $resultado = 'Has iniciado sesión prro';
                $user->setId($_SESSION['id']);
                $propiedades = $user->showPropiertesUser();

                $router->render('/usuarios/panel', [
                    'login' => $propiedades['login'],
                    'nombre' => $propiedades['Nombre'],
                    'paterno' => $propiedades['apaterno'],
                    'materno' => $propiedades['amaterno'],
                    'nivel' => $propiedades['nivel']
                ]);
            } else {
                $resultado = 'No se ha podido iniciar sesión';
            }
        }

        $router->render('/usuarios/login');
    }

    public static function logout(Router $router)
    {
        session_destroy();
        header('Location: /usuarios/login');
    }

    public static function agregar(Router $router){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            if($_POST['pass1'] == $_POST['pass2']){
                $user = new Usuarios();
                $user->setLogin($_POST['login']);
                $user->setNombre($_POST['nombre']);
                $user->setPass($_POST['pass1']);
                $user->setPaterno($_POST['apaterno']);
                $user->setMaterno($_POST['amaterno']);
                $user->setEmail($_POST['email']);
                $user->setNivel($_POST['nivel']);

                $user->createUser();
                header('Location:/usuarios/mostrar');
            }else{
                echo 'Contraseñas no coinciden';
            }
            
        }

        $router->render('/usuarios/agregar');
    }

    public static function modificar(Router $router){
        
        $id = $_GET['recordID'];
        if(verificarGET($id,'/usuarios/mostrar')){
            $user = new Usuarios();
            $user->setId($id);
            $prop = $user->showPropiertesUser();
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST')  {
            $user->setLogin($_POST['login']);
            $user->setNombre($_POST['Nombre']);
            $user->setPaterno($_POST['apaterno']);
            $user->setMaterno($_POST['amaterno']);
            $user->setPass($_POST['password']);
            $user->setEmail($_POST['email']);
            $user->setNivel($_POST['nivel']);

            if($user->updateUser()){
                header('Location: /usuarios/mostrar');
            }

        }


        $router->render('/usuarios/modificar',['row_Recordset1' => $prop]);
    }

    public static function eliminar(Router $router){
        $id = $_GET['recordID'];
        if(!filter_var($id, FILTER_VALIDATE_INT) && $_SERVER['REQUEST_METHOD'] === 'GET'){
            header('Location:/usuarios/mostrar');
        }else{
            $user = new Usuarios();
            $user->setId($id);
            $user->deleteUser();
            header('Location:/usuarios/mostrar');
        }
    }
}
