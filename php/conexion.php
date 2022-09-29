<?php
    $servidor = "localhost";
    $bd = "tiendita";
    $usuario = "root";
    $password = "";
    // Crear la conexion
    $conn = new mysqli($servidor, $usuario, $password, $bd);
    // Verificar la conexion
    if($conn->connect_error){
       die("Falló la conexion: " . $conn->connect_error);
    }  

?>