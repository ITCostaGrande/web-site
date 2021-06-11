<?php

function verificarGET($id, string $url){
    
    if(!filter_var($id, FILTER_VALIDATE_INT)){
        header("Location:$url");
    }else{
        return true;
    }
}