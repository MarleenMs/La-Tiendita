<?php
    if(isset($_POST["submit"])){
        $msg = "";
        if(isset($_FILES['imagen'])){
            // Subiendo a Bases de Datos
            include('../php/conexion.php');
            print_r($_FILES['imagen']);
            $nombre = $_POST["nombre_articulo"];
            $precio = $_POST["precio"];
            $disp = $_POST["disp"];
            $marca = $_POST["marca"];
            $url = "$_SERVER[HTTP_REFERER]";
            $viejo = explode("?",$url);
            $prov = $viejo[1];
            // Información de la Imagen
            $nombre_img = $_FILES["imagen"]["name"];
            $tipo_img = $_FILES["imagen"]["type"];
            $tmp_img = $_FILES["imagen"]["tmp_name"];
            $error_img = $_FILES["imagen"]["error"];
            $size_img = $_FILES["imagen"]["size"]; // Tamaño viene en Bytes
            // Procesando Imagen
            if($error_img === 0){
                if($size_img > 4000000){
                    $msg = "¡Su archivo es demasiado grande!";
                    header("Location: producto_mod.php?mensaje=".$msg);
                } else{
                    $img_ext = pathinfo($nombre_img, PATHINFO_EXTENSION);
                    ///echo $img_ext;
                    // Convirtiendo extension a minuscula
                    $img_ext_lw = strtolower($img_ext); // vs strtoupper (para convertir a mayusculas)
                    // Creando arreglo de extensiones permitidas
                    $ext_permitidas = array("jpg","jpeg","png");
                    if(in_array($img_ext_lw, $ext_permitidas)){
                        $nuevo_nombre = uniqid("img-", true).'.'.$img_ext_lw;
                        // NOTA: Importante checar permisos para subir archivos a la carpeta
                        $ruta_imagen = "../uploads/".$nuevo_nombre;
                        move_uploaded_file($tmp_img, $ruta_imagen);
                        $ruta_base = "uploads/".$nuevo_nombre;
                        // Insertar en la base de datos
                        $sql = "INSERT into productos(nombre, precio, imagen, disp, marca, correo_prov) values('$nombre', $precio, '$ruta_base',$disp,'$marca', '$prov')";
                        $resultado = $conn->query($sql);
                        if($resultado){
                            $msg = "¡Informacion Subida Correctamente!";
                            header("Location: ../exitoso.php?mensaje=".$msg);
                        } else{
                            $msg = "¡Error al Procesar la Consulta!";
                            unlink($ruta_imagen);
                            header("Location: ../prod_error.php?mensaje=".$msg);
                        }
                        include('../php/desconexion.php'); // Cerrando Conexion
                    } else{
                        $msg = "¡Tipo de archivo invalido!";
                        header("Location: ../prod_error.php?mensaje=".$msg);
                    }
                }
            } else{
                $msg = "¡Un error desconocido a Ocurrido!";
                header("Location: ../prod_error.php?mensaje=".$msg);
            }
        } else{
            $msg = "Seleccione Imagen";
            header("Location: ../producto_mod.php?mensaje=".$msg);
        }
    } else{
        header("Location: ../producto_mod.php");
    }
?>