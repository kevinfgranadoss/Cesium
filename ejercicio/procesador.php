<?php

$lat=$_REQUEST["latitud"];
$lon=$_REQUEST["longitud"];

$enlace= mysqli_connect("localhost", "root", "mysql2017", "catastro", "3306");

$guardado = "INSERT INTO predio (lat,lon) VALUES ('".$lat."','".$lon."')";
mysqli_query($enlace,$guardado);
?>

