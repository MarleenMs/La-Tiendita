<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include('../php/conexion.php');
    session_start();

    $nombre=$_GET['Nombre'];

    $consulta = "SELECT * FROM productos where nombre = '$nombre' ";
    $resultado = mysqli_query($conn, $consulta);

    $filas = $resultado->num_rows;

    if($filas==0){
        header("location: ../no_prod.php?$nombre");
    }
    else{
        header("location: ../prod_actualizar.php?$nombre");
    }

    include('../php/desconexion.php');
?> 