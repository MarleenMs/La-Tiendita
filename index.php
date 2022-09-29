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
      <title>La Tiendita</title>
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
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="section">
         <!-- header inner -->
         <div class="header">
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
                                 <li><a href="contact.php">Contáctanos</a></li>
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
      <section >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Bienvenido a <strong class="color"><br>La Tiendita</strong></h1>
                              <p>Sea bienvenido a la mejor tienda alrededor de toda la FES Acatlán, donde podrá encontrar los mejores precios en los mejores productos</p>
                              <a class="btn btn-lg btn-primary" href="clients.php" role="button">Comprar Ahora</a>
                              <a class="btn btn-lg btn-primary" href="about.php" role="button">Acerca de nosotros</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/abarrotes.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         </div>
      </section>
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
                                    <figure><img src=".$mostrar['imagen']."></figure>
                                    <h3>$<strong class='price_text'>".$mostrar['precio']."</strong></h3>
                                    <h4>".$mostrar['nombre']."</h4>
                              </div>
                           </div>";
                        }
                     }
                     include('php/desconexion.php');
                  ?>
               </div>
             </div>
            </div>
           </div>
      </div>
      <!-- end plant -->
      <!--Our  Clients -->
      <div id="plant" class="section_Clients layout_padding padding_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2> Nuestro Equipo</h2>
                     <span style="text-align: center;">La Tiendita le pone a su disposición a su gran equipo de trabajo</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
            <div class="section Clients_2 layout_padding padding-top_0">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">

                        <div id="testimonial" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#testimonial" data-slide-to="0" class="active"></li>
    <li data-target="#testimonial" data-slide-to="1"></li>
    <li data-target="#testimonial" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="images/pedro.jpg" style="max-width: 100%;"></div>
                              <div class="john_text">PEDRO VELAZQUEZ MORAN<span style="color: #fffcf4;">(Fundador)</span></div>
                              <p class="lorem_ipsum_text">Si puede leer esto es porque si funciono</p>
                              <div class="icon_image"><img src="images/icon-1.png"></div>
                           </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="images/marlen.jpg" style="max-width: 100%;"></div>
                              <div class="john_text">MARLEEN MUÑOZ SALA<span style="color: #fffcf4;">(Directora General)</span></div>
                              <p class="lorem_ipsum_text">Este fue un proyecto hecho con sangre sudor y lágrimas</p>
                              <div class="icon_image"><img src="images/icon-1.png"></div>
                           </div>
                        </div>
    </div>
    <div class="carousel-item">
      <div class="titlepage">
                           <div class="john">
                              <div class="john_image"><img src="images/mia.jpg" style="max-width: 100%;"></div>
                              <div class="john_text">LUIS ANTONIO MOYSEN HERNANDEZ<span style="color: #fffcf4;">(La Mascota del Equipo)</span></div>
                              <p class="lorem_ipsum_text">Es más fácil cruzar la frontera que pasar el semestre</p>
                              <div class="icon_image"><img src="images/icon-1.png"></div>
                           </div>
                        </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#testimonial" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#testimonial" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
      <!-- end Our  Clients -->
      <!-- start Contact Us-->

      <div id="plant" class="contact_us layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                    <h2><strong class="black"> Afiliate</strong>  con nosotros</h2>
                     <span style="text-align: center;">Si deseas vender tus productos con nosotros, debes registrarte primero, llena el siguiente formulario para solicitar una cita con el director</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="contact_us_2 layout_padding paddind_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="soc_text"><br><br></div>
               </div>
               <div class="col-md-6">
                  <div class="email_btn">
                     <form action="logica/datos.php" method="post">
                        <div class="form-group">
                           <input type="text" class="form-control form-control-sm" placeholder="Nombre" name="Nombre">
                        </div>
                        <div class="form-group">
                           <input  type="text" class="form-control form-control-sm" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                           <input  type="text" class="form-control form-control-sm" placeholder="Telefono" name="Telefono">
                        </div>
                         <div class="submit_btn">
                            <button type="submit" class="btn btn-primary" style="background: #081b30; color: #fff; padding: 11px;">Enviar</button>
                         </div>
                      </form>
                  </div>
               </div>
            </div>
            <div class="row">
            <div class="contact_us_3 layout_padding">
                <div class="row">
                    <div class="col-md-4">
                        <h1 style="color: #ffffff; ">Registrate con nosotros</h1>
                        <p class="long_text">Ingresa tu correo si deseas brindar tu opinión y calificar nuestros productos</p>
                    </div>
                    <div class="col-md-8">
                        <div class="email_text">
                            <form action="logica/cliente.php" method="post">
                                <div class="input-group mb-3">
                                    <input style="border-bottom-left-radius: 20px !important; border-top-left-radius: 20px !important;" type="text" class="form-control" placeholder="Ingresa tu Correo" name="correo_cliente">
                                        <div class="input-group-append">
                                            <button style="border-top-right-radius: 20px !important; border-bottom-right-radius: 20px !important; color: #fff; padding-bottom: 10px; padding-top: 10px;" class="btn btn-primary" type="Subscribe" href="index.php">Suscribirse</button>  
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      
    <div id="footer" class="Address layout_padding">
       <div class="container">
          <div class="row">
             <div class="col-sm-12">
               <div class="titlepage">
                  <div class="main">
                     <h1 class="address_text">Dirección</h1>
                  </div>
               </div>
             </div>
          </div>
               <div class="address_2">
                  <div class="row">
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="images/map-icon.png" /></span>
                          <span style="margin-top: 10px;">Av. Alcanfores y San Juan, Totoltepec, Sta Cruz Acatlan</span></div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="images/phone-icon.png" /></span>
                          <span style="margin-top: 21px;">(55 5555 5555 )</span></div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="images/email-icon.png" /></span>
                          <span style="margin-top: 21px;">latiendita@gmail.com</span></div>
                     </div>
                     </div> 
                  </div>
               </div>
                  <div class="menu_main">
                     <div class="menu_text">
                        <ul>
                           <li> <a href="index.php">Inicio</a> </li>
                           <li> <a href="about.php">Acerca de nosotros</a> </li>
                           <li><a href="testmonial.php">Staff</a></li>
                           <li><a href="clients.php">Productos</a></li>
                           <li><a href="contact.php">Contáctanos</a></li>
                        </ul>
                     </div>
                  </div>
       </div>
    </div>

      <!-- end Contact Us-->
      <!-- footer start-->
      <div id="plant" class="footer layout_padding">
         <div class="container">
            <p>© 2021 Todos los derechos reservados. Una página hecha con amor</p>
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