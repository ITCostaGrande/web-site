<?php
require "./vendor/autoload.php";


use MVC\Router;
use Controllers\ConocenosController;
use Controllers\OfertaController;
use Controllers\EstudiantesController;
use Controllers\AspirantesController;
use Controllers\BecasController;
use Controllers\UsuariosController;
use Controllers\BoletinesController;
use Controllers\SlidersController;
use Controllers\ContactoController;
//referencia al objeto router
$router = new Router;

//Declaración de las rutas del sitio
//Rutas de la carpeta nosotros
$router->get('/',[ConocenosController::class, 'index']);
$router->get('/conocenos/',[ConocenosController::class,'nosotros']);
$router->get('/conocenos/nosotros',[ConocenosController::class,'nosotros']);
$router->get('/conocenos/mensaje',[ConocenosController::class,'mensaje']);
$router->get('/conocenos/mision',[ConocenosController::class,'mision']);
$router->get('/conocenos/vision',[ConocenosController::class,'vision']);
$router->get('/conocenos/valores',[ConocenosController::class,'valores']);
$router->get('/conocenos/calidad',[ConocenosController::class,'calidad']);
$router->get('/conocenos/organigrama',[ConocenosController::class,'organigrama']);
$router->get('/conocenos/directorio',[ConocenosController::class,'directorio']);
$router->get('/conocenos/avisos',[ConocenosController::class,'avisos']);
$router->get('/conocenos/normateca',[ConocenosController::class,'normateca']);

//Rutas de la carpeta oferta
$router->get('/oferta/',[OfertaController::class,'presencial']);
$router->get('/oferta/presencial',[OfertaController::class,'presencial']);
$router->get('/oferta/distancia',[OfertaController::class,'distancia']);
$router->get('/oferta/arquitectura',[OfertaController::class,'arquitectura']);
$router->get('/oferta/cp',[OfertaController::class,'cp']);
$router->get('/oferta/admon',[OfertaController::class,'admon']);
$router->get('/oferta/tics',[OfertaController::class,'tics']);
$router->get('/oferta/isc',[OfertaController::class,'isc']);
$router->get('/oferta/electromecanica',[OfertaController::class,'electromecanica']);
$router->get('/oferta/ige',[OfertaController::class,'ige']);


//Rutas para la carpeta estudiantes
$router->get('/estudiantes/',[EstudiantesController::class,'reinscripcion']);
$router->get('/estudiantes/reinscripcion',[EstudiantesController::class,'reinscripcion']);
$router->get('/estudiantes/act_complementarias',[EstudiantesController::class,'actComplementarias']);
$router->get('/estudiantes/servicio_social',[EstudiantesController::class,'servicioSocial']);
$router->get('/estudiantes/titulacion',[EstudiantesController::class,'titulacion']);
$router->get('/estudiantes/egresados',[EstudiantesController::class,'egresados']);
$router->get('/estudiantes/bolsa',[EstudiantesController::class,'bolsa']);
$router->get('/estudiantes/buzon',[EstudiantesController::class,'buzon']);
$router->get('/estudiantes/lineamientos',[EstudiantesController::class,'lineamientos']);
$router->get('/estudiantes/reglamentos',[EstudiantesController::class,'reglamentos']);
$router->get('/estudiantes/biblioteca_digital',[EstudiantesController::class,'bibliotecaDigital']);
$router->get('/estudiantes/act_extraescolares',[EstudiantesController::class,'extraescolares']);
$router->get('/estudiantes/cisco',[EstudiantesController::class,'cisco']);
$router->get('/estudiantes/encuestas',[EstudiantesController::class,'encuestas']);
$router->get('/estudiantes/residencias',[EstudiantesController::class,'residencias']);

// Rutas de los aspirantes
$router->get('/becas/',[BecasController::class,'resultados']);
$router->get('/becas/resultados',[BecasController::class,'resultados']);

// Rutas para los aspirantes
$router->get('/aspirantes/',[AspirantesController::class,'fichas']);
$router->get('/aspirantes/fichas',[AspirantesController::class,'fichas']);
$router->get('/aspirantes/formatos',[AspirantesController::class,'formatos']);
$router->get('/boletines/ver',[BoletinesController::class,'ver']);

// Rutas para los usuarios
$router->get('/usuarios/login',[UsuariosController::class,'login']);
$router->post('/usuarios/login',[UsuariosController::class,'login']);
// Ruta de contacto
$router->post('/contacto',[ContactoController::class,'contacto']);
session_start();
if(isset($_SESSION['login'])){
    $router->get('/usuarios/mostrar',[UsuariosController::class,'mostrar']);
    $router->get('/usuarios/panel',[UsuariosController::class,'panel']);
    $router->get('/usuarios/logout',[UsuariosController::class,'logout']);
    $router->get('/usuarios/agregar',[UsuariosController::class,'agregar']);
    $router->post('/usuarios/agregar',[UsuariosController::class,'agregar']);
    $router->get('/usuarios/modificar',[UsuariosController::class,'modificar']);
    $router->post('/usuarios/modificar',[UsuariosController::class,'modificar']);
    $router->get('/usuarios/eliminar',[UsuariosController::class,'eliminar']);

    // Rutas para los boletines
    $router->get('/boletines/mostrar',[BoletinesController::class,'mostrar']);
    $router->get('/boletines/agregar',[BoletinesController::class,'agregar']);
    $router->post('/boletines/agregar',[BoletinesController::class,'agregar']);
    $router->get('/boletines/modificar',[BoletinesController::class,'modificar']);
    $router->post('/boletines/modificar',[BoletinesController::class,'modificar']);
    $router->get('/boletines/eliminar',[BoletinesController::class,'eliminar']);
    $router->get('/boletines/propiedades',[BoletinesController::class,'propiedades']);

    // Rutas para los sliders
    $router->get('/sliders/mostrar',[SlidersController::class,'mostrar']);
    $router->get('/sliders/agregar',[SlidersController::class,'agregar']);
    $router->post('/sliders/agregar',[SlidersController::class,'agregar']);
    $router->get('/sliders/modificar',[SlidersController::class,'modificar']);
    $router->post('/sliders/modificar',[SlidersController::class,'modificar']);
    $router->get('/sliders/eliminar',[SlidersController::class,'eliminar']);
    $router->get('/sliders/propiedades',[SlidersController::class,'propiedades']);
}




$router->comprobarRutas();