<?php

function conectar(){
    $conn = mysqli_connect('localhost','root','','itcos268_bdtec');
    if(!$conn){
        echo 'No se pudo conectar';
        exit;
    }

    return $conn; 
}

    
    


