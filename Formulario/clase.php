<?php

class Procesador{
    function procesar(){
        return "ok";
    }
    
    
    function latitud(){
    return $_REQUEST["latitud"];
    }
    
    function longitud(){
        return $_REQUEST["longitud"];
    }
}
$objeto=new Procesador();
echo "La latitud es:".$objeto->latitud()."<BR>";
echo "La longitud es:".$objeto->longitud();
?>
