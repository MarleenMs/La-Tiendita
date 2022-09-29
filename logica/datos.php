<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include('../php/conexion.php');

    session_start();

    $nombre=$_POST['Nombre'];
    $correo = $_POST['Email'];
    $tel =$_POST['Telefono'];
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

    if (!filter_var($correo,FILTER_VALIDATE_EMAIL)==false){
        $consulta = "SELECT correo FROM provedores where correo = '$correo'";
        $resultado = mysqli_query($conn, $consulta);
        $filas = $resultado->num_rows;
        if($filas==0){
            $insert="INSERT INTO provedores (nombre, correo, telefono) VALUES ('$nombre', '$correo', $tel)";
            $ejecutar=mysqli_query($conn, $insert);
    
            if(!$ejecutar)
            {
                header("location: ../datos_mal.php");
            }
            else{
                header("location: ../staff.php");
            }
        }
        else{
            header("location: ../staffexistente.php");
        }
    } else {
        header("location: ../datos_mal.php");
    }
    
    include('../php/desconexion.php');
?> 
