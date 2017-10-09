<?php
    $enlace=mysqli_connect("localhost", "root", "mysql2017", "ejemplo", "3306");
    if($enlace){
        echo "ñom";
    }
    else{
        echo "ño";
    }
    
?>