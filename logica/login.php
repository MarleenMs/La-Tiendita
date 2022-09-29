<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include('../php/conexion.php');

    session_start();

        $correo = $_GET["correo"];
        // Realizando Query
        $sql = "SELECT correo FROM provedores where correo = '$correo'";
        $resultado = mysqli_query($conn, $sql);
        
        $filas = $resultado->num_rows;

        if(isset($_GET['recordar'])){
            setcookie("correo", $correo, time() + 86400, "/"); // 86400 ms = 1 día
        }else{
            if(isset($_COOKIE["correo"])){
                setcookie("correo", $correo, time() - 86400, "/"); // 86400 ms = 1 día
            }
        }

        if($filas!=0){
            header("location: ../producto_mod.php?correo=$correo");
        } 
        else{
            header("location: ../inexistente.php?correo=$correo");
        }        


    include('../php/desconexion.php');
?>
   