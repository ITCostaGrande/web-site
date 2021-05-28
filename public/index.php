<?php
require "../vendor/autoload.php";


use MVC\Router;
use Controllers\ConocenosController;
use Controllers\OfertaController;
use Controllers\EstudiantesController;
use Controllers\AspirantesController;
use Controllers\BecasController;
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

// Rutas de los aspirantes
$router->get('/becas/',[BecasController::class,'resultados']);
$router->get('/becas/resultados',[BecasController::class,'resultados']);

// Rutas para los aspirantes
$router->get('/aspirantes/',[AspirantesController::class,'fichas']);
$router->get('/aspirantes/fichas',[AspirantesController::class,'fichas']);
$router->get('/aspirantes/formatos',[AspirantesController::class,'formatos']);


$router->comprobarRutas();