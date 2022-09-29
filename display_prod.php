<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Productos</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout product_pagr">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="section">
         <!-- header inner -->
        <div class="header_main">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li> <a href="index.php">Inicio</a> </li>
                              <li> <a href="about.php">Acerca de nosotros</a> </li>
                              <li><a href="testmonial.php">Proveedores</a></li>
                              <li><a href="clients.php">Productos</a></li>
                              <li><a href="contact.php">Contactanos</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      </header>
      <!-- end header -->

      <!-- plant -->
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2><strong class="black"> Nuestros</strong>  Productos</h2>
                     <span>Ven y conoce la gran variedad de productos de la más alta calidad que tenemos para ti en nuestra tienda</span>
                     <span>¡Visualiza tus productos y adquierelos directamente en sucursal!</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="clothes_main section ">
            <div class="container">
               <div class="row">
                  <?php
                     ini_set('display_errors', 1);
                     ini_set('display_startup_errors', 1);
                     error_reporting(E_ALL);

                     include('php/conexion.php');

                     $sql = "SELECT imagen, precio, nombre, id_prod from productos";
                     $resultado = mysqli_query($conn, $sql);
                     $filas = $resultado->num_rows;

                     if($filas > 0)
                     {
                        while($mostrar = mysqli_fetch_array($resultado))
                        {   
                              echo "
                                 <div class='col-xl-4 col-lg-4 col-md-6 col-sm-12'>
                                    <div class='sport_product'>
                                          <figure><img src=".$mostrar['imagen']."></figure>
                                          <h3>$<strong class='price_text'>".$mostrar['precio']."</strong></h3>
                                          <h4>".$mostrar['nombre']."</h4>
                                          <div class='btn_main'>
                                             <a class='btn btn-lg btn-primary1' href='display_prod.php' role='button' name='prod'>Más información</a>
                                          </div>
                                    </div>
                                 </div>";
                        }
                     }
                     include('php/desconexion.php');
                  ?>
               </div>
            </div>
         </div>
      <!-- end plant -->

      <!-- inicio sesion-->
         <div class="row">
            <div class="col-md-12 ">
               <div class="titlepage1">
                  <h2><strong class="black">¿Eres comerciante o provedor?</h2>
                  <span>Si deseas agregar productos, da click aquí:</span>
                  <a class="btn btn-lg btn-primary" href="contact.php" role="button">¡Registrarse!</a>
               </div>
            </div>
         </div>
      <!--Fin inicio sesion-->
     <!-- footer start-->
      <div id="plant" class="footer layout_padding">
         <div class="container">
            <p>© 2019 All Rights Reserved. Design by<a href="https://php.design/"> Free php Templates</a></p>
         </div>
      </div>

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 


   </body>
</html>