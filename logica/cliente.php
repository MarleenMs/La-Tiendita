<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include('../php/conexion.php');

    session_start();

    $correo = $_POST['correo_cliente'];
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

    if (!filter_var($correo,FILTER_VALIDATE_EMAIL)==false){
        $consulta = "SELECT correo FROM clientes where correo = '$correo'";
        $resultado = mysqli_query($conn, $consulta);
        $filas = $resultado->num_rows;
        if($filas==0){
            $insert="INSERT INTO clientes(correo) VALUES ('$correo')";
            $ejecutar=mysqli_query($conn, $insert);
    
            if(!$ejecutar)
            {
                header("location: ../cliente_mal.php");
            }
            else{
                header("location: ../index.php");
            }
        }
        else{
            header("location: ../cliente_existente.php");
        }
    } else {
        header("location: ../cliente_mal.php");

    }
    
    include('../php/desconexion.php');
?>