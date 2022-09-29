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
        $delete="DELETE FROM productos WHERE nombre = '$nombre' ";
        $ejecutar=mysqli_query($conn, $delete);

        if(!$ejecutar)
        {
            echo"Hubo un error";
        }
        else{
            header("location: ../prod_eliminado.php?$nombre");
        }
    }

    include('../php/desconexion.php');
?> 