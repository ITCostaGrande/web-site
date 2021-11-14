<?php

namespace MVC;

class Router{
    public $rutasGET = [];
    public $rutasPOST = [];
    
    
    public function get($url,$fn){
        $this->rutasGET[$url] =$fn;
    }
    public function post($url,$fn){
        $this->rutasPOST[$url] =$fn;
    }

    
    
    
    public function comprobarRutas(){

        $urlAcutal = $_SERVER['PATH_INFO'] ?? '/';
        echo $urlAcutal;
        $metodo = $_SERVER['REQUEST_METHOD'];
        echo $metodo;
        if($metodo === 'GET'){
            $fn= $this->rutasGET[$urlAcutal] ?? null;
        }else{
            $fn= $this->rutasPOST[$urlAcutal] ?? null;
        }
        
        if($fn){
            //Cuando la URL existe
            call_user_func($fn,$this);
        }else{
            include __DIR__ ."/views/layout/404.php";
        }
    }

    //Muestra una vista
    public function render($view, $datos = []){
        foreach ($datos as $key => $value){
            $$key = $value;
        }
        ob_start();
        echo __DIR__;
        include __DIR__."/views/$view.php";
        $contenido = ob_get_clean();

        include __DIR__."/views/layout/layout.php";
    }
}