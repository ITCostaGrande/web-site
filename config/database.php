<?php

function conectar(){
    $conn = mysqli_connect('database-itcg.ca9wqlqc70ox.us-east-1.rds.amazonaws.com
    ','admin','tecnmitcg','itcg');
    if(!$conn){
        echo 'No se pudo conectar';
        exit;
    }

    return $conn; 
}

    
    


