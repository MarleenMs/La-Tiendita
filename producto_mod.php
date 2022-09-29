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


<!---- contenido inicio ---> 
<div id="plant" class="contact_us layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2 style="text-align: center; margin-top: 45px;">Bienvenido</strong></h2>
                     <span style="text-align: center;">¿Qué deseas hacer?</span>
                  </div>
               </div>
            </div>
        </div>
        <div class="clothes_main section ">
          <div class="container">
            <div class="row">
               <div class="col-md-6">
               <h2 style="color: white">Agregar un producto</h2>
                  <form method="post" action="logica/cprod.php" enctype="multipart/form-data">
                     <?php
                     if(isset($_GET["mensaje"])){
                           echo "<p class='alerta'>".$_GET["mensaje"]."</p>";
                     }
                     ?>
                     <input type="text" class="form-control form-control-sm" name="nombre_articulo" placeholder="Ingrese el nombre de articulo" required><br>
                     <input type="number" class="form-control form-control-sm" step="0.0001" name="precio" placeholder="Ingrese el precio de articulo" required><br>
                     <input type="text" class="form-control form-control-sm" name="disp" placeholder="Ingrese el total de producto que desea brindarnos" required><br>
                     <input type="text" class="form-control form-control-sm" name="marca" placeholder="Ingrese la marca del producto" required><br>
                     <label for="file-upload" class="custom-file-upload">
                           <i class="fas fa-images"></i>Subir Imagen   
                     </label>
                     <input class="btn btn-iniprov" id="file-upload" type="file" name="imagen"><label id="file-name"></label>
                     <input class="btn btn-iniprov" type="submit" name="submit" value="Enviar" > 
                  </form>
                  <script>
                     document.querySelector("#file-upload").onchange = function(){
                           document.querySelector("#file-name").textContent = this.files[0].name;
                     }
                  </script>
               </div>
               <div class="col-md-6">
                  <h2 style="color: white">Eliminar un producto</h2>
                  <form method="get" action="logica/eliminar.php" enctype="multipart/form-data">
                  <div class="form-group">
                     <input type="text" class="form-control form-control-sm" placeholder="Nombre del producto que desea eliminar" name="Nombre">
                  </div>
                  <input class="btn btn-iniprov" type="submit" value="Eliminar" style="margin-left= 500px"> <br><br>
                  </form>
                  <!---- Para después presentar 
                  <h2 style="color: white">Actualizar un producto</h2>
                  <form method="get" action="logica/buscar_prod.php" enctype="multipart/form-data">
                  <div class="form-group">
                     <input type="text" class="form-control form-control-sm" placeholder="Nombre del producto cuya información desea actualizar" name="Nombre">
                  </div>
                  <input class="btn btn-iniprov" type="submit" value="Buscar" style="margin-left= 500px"> <br><br>
                  ---->
                  </form>
               </div>
            </div>    
         </div>
      </div>
   </div>
</div>            

<!---- contenido final ---> 

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