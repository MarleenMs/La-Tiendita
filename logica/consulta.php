<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include('php/conexion.php');

    $sql = "SELECT imagen, precio, nombre from productos";
    $resultado = mysqli_query($conn, $sql);
    $filas = $resultado->num_rows;

    if($filas > 0)
    {
            while($mostrar = mysqli_fetch_array($resultado))
            {
            
            echo "
                <div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'>
                <div class='sport_product'>
                        <img src=".$mostrar['imagen'].">
                        <h3>$<strong class='price_text'>".$mostrar['precio']."</strong></h3>
                        <h4>".$mostrar['imagen']."</h4>
                </div>
                </div>";
            }
    }
    include('php/desconexion.php');
?>
