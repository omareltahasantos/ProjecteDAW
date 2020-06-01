<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/pushbar.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
   <!-- Custom styles for this template -->
 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   <!-- Custom styles for this template -->
    <script src="https://kit.fontawesome.com/c5c1cdaed3.js" crossorigin="anonymous"></script>
   <style>
   
    
   </style>

  </head>
  <body class="p-0 fuente-1">
        <?php 
          //Voy a comprobar si se le ha pasado por la url el usuario, es decir se ha logeado
          if(isset($_GET['usuario'])){
            include('../Clases/conexion/conexionDB.php');
            $usuario = $_GET['usuario'];
            $user = new user($objPDO);
            $consulta ="SELECT id_user FROM user WHERE nombre ='".$usuario."'" ;
            $id = $user->selectidUser($consulta);
            
            if($id){
              session_start();
              $_SESSION['id_user'] = $id;
              $_SESSION['usuario'] = $usuario;
              $idUser =  $_SESSION['id_user'];
            

            }
          }else{
			  header("Location:nousuario.php");
		  }
        ?>

        <!-- Page Content  -->
      <div id="content" class="p-0 ">

       
           <div class="container-fluid cabecera text-center ">
              <div class="container">
              
                <div class="row pt-4">
                  <div class="col-md-2 ">
                      <p class="pl-2 m-0 pb-1 pr-1" ><i class="fa fa-bars " style="font-size:24px" id="barras" type="button"></i></p>
                      <span class="paginasCabecera fuente-1" type="button" id="menu">Menu</span>
                  </div>
                  <div class="col-md-2 mr-5 ">
                      <p class="pl-2 m-0 pb-1"><i class="fa fa-calendar" style="font-size:24px" id="calendar" type="button"></i></p>
                      <span class="paginasCabecera" type="button" ><a href="../subHome/index.php?category=Ofertas" class="enlace fuente-1" id="lanzamiento">Ofertas</a></span>
                  </div>
  
                  <div class="col-md-3 pl-0 ">
                
                    <a href="../homePage/index.php?usuario=<?php echo $_SESSION['usuario']?>" class="enlace"><img src="../fichaProducto/images/logo.png" alt="barras" class ="img-responsive" style="width:230px !important; height:110px !important"></p></a>
                  </div>
                  <?php
                     if(isset($_SESSION['usuario'])){
                      
                      $usuario = $_GET['usuario'];
                      $userrol = new user($objPDO);
                      $consulta ="SELECT rol FROM user WHERE nombre ='".$_SESSION['usuario']."'" ;
                      $rol= $userrol->selectRol($consulta);
                      if($rol == "visitante"){
                        ?>
                         <div class="col-md-2 ">
                        <p class="pl-2 m-0 pb-1 pr-2"><i class="fa fa-user" style="font-size:24px" id="login" type="button"></i></p>
                        <span class="paginasCabecera" type="button" ><a href="#" class="enlace fuente-1" id="acceder"><?php echo $_GET['usuario'];?></a></span>
                       </div>
                       <?php
                      }else if($rol == "cliente"){
                        ?>
                      <div class="col-md-2 ">
                           <p class="pl-2 m-0 pb-1 pr-2"><i class="fa fa-user" style="font-size:24px" id="login" type="button"></i></p>
                          <span class="paginasCabecera" type="button" ><a href="#" class="enlace fuente-1" id="acceder" data-toggle="modal" data-target="#pedidosModal">Ver pedidos</a></span>
                       </div>
                       
                      <?php
                      } else if($rol == "admin"){
                      ?>
                      <?php
                       
                        ?>
                         <div class="col-md-2 ">
                        <p class="pl-2 m-0 pb-1 pr-2"><i class="fa fa-user" style="font-size:24px" id="login" type="button"></i></p>
                        <span class="paginasCabecera" type="button" ><a href="../AdministrationPage/OnlineShop/AdministrativePage.php" class="enlace fuente-1" id="acceder">Admin page</a></span>
                      </div>
                        <?php
                       }
                      }else{
                        ?>
                         <div class="col-md-2 ">
                        <p class="pl-2 m-0 pb-1 pr-2"><i class="fa fa-user" style="font-size:24px" id="login" type="button"></i></p>
                        <span class="paginasCabecera" type="button" ><a href="../Login/login.html" class="enlace fuente-1" id="acceder">Acceder</a></span>
                      </div>
                        <?php
                       }
                      ?>
                  <div class="col-md-2 ">
                      <p class="pl-2 m-0 pb-1 pr-2"><i class="fa fa-cart-plus" style="font-size:24px" id="cart" type="button"></i></p>
                      <span class="paginasCabecera" type="button" ><a href="../Cart/index.php" class="enlace fuente-1" id="carro">Cesta</a></span>
                  </div>
               </div>
            </div> 
          </div>
          <!--Pushbar menu-->
          <div data-pushbar-id="pushbar-menu" data-pushbar-direction="left" class="pushbar-menu push-menu">
            <button id="pushbar-close" data-pushbar-close class="float-right">X</button>
            <nav id="sidebar">
              <div class="p-4 pt-5 ">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../fichaProducto/images/user.png);"></a>
                <div class="row text-center pb-3 fixed">
                  <div class="col-lg-12 ">
                    <?php
                         if(isset($_GET['usuario'])){
                          ?>
                           <h4 class="fuente-1">Bienvenido/a <?php echo $_GET['usuario']; ?></h4>
                            <?php
                             }else{
                              ?>
                              <h4 class="fuente-1">Bienvenida Laura</h4>
                              <?php
                             }
                            ?>
                    <hr style="background-color:grey;">
                  </div>
                </div>
                <div class="row pl-3 pb-3 ">
                  <div class="col-md-12 ">
                   <a href="../subHome/index.php?category=Ofertas" class="menu-sidebar fuente-1">Ofertas</a>      
                  </div>
                </div>
                <div class="row pl-3 pb-3">
                  <div class="col-md-12 ">
                    <a href="../subHome/index.php?category=Rebajas" class="menu-sidebar fuente-1">Rebajas</a>  
                  </div>
                </div>
                <div class="row pl-3 pb-3">
                  <div class="col-md-12 ">
                    <a href="../subHome/index.php?category=PS4" class="menu-sidebar fuente-1">Playstation 4</a>  
                  </div>
                </div>
                <div class="row pl-3 pb-3">
                  <div class="col-md-12 ">
                    <a href="../subHome/index.php?category=XONE" class="menu-sidebar fuente-1">Xbox One</a>  
                  </div>
                </div>
                <div class="row pl-3 pb-3">
                  <div class="col-md-12 ">
                    <a href="../subHome/index.php?category=SWITCH" class="menu-sidebar fuente-1">Nintendo Switch</a>  
                  </div>
                </div>
                <div class="row pl-3 pb-3">
                  <div class="col-md-12 ">
                    <a href="../subHome/index.php?category=PC" class="menu-sidebar fuente-1">PC</a>  
                  </div>
                </div>
                <div class="row text-center pb-3">
                  <div class="col-lg-12">
                    <hr style="background-color:grey;">   
                  </div>
                </div>
                <div class="footer">
                  <a href="cerrarsesion.php" class="menu-sidebar fuente-1">Cerrar Sesion</a>  
                </div>

              </div>
            </nav>
        
          </div>

          <!--pushbar carrito de la compra-->
         
          <!--Final carrito de la compra-->


          <div class="container-fluid cabecera text-center">
            <div class="row">
                <div class="col-lg-12 m-0 p-0">
                <form method="GET" action="../Resultados/index.php">          
                    <div class="input-group">
                        <input type = 'text' name="b" list="browsers" class="form-control fuente-1" id='buscador' placeholder="Introduce un videojuego....">
                        <datalist id="browsers">
                        
                        </datalist>
                    
                        <div class="input-group-append">
                        <button type="submit" class="input-group-text" id="submit"><i class="fa fa fa-search fuente-1" id="lupa" aria-hidden="true"></i></span>
                        </div>
                    </div>
                 </form>
                </div>
            </div>
        </div>
        <!-- Page Content Slider -->
          <div class="container-fluid">
            <div class="container">
            <?php
              if(isset($_GET['success'])){
                ?>
                <div class="row pt-4">
                  <div class="col-lg-12">
                  <p style="color:green;"><?php echo 'Gracias por tu pedido! Tienes la clave de tu pedido en la seccion pedidos del menu';?></p>
                  </div>
                </div>
                <?php
              }

              ?>
            <div class="row">
              <div class="col-lg-12 p-0 m-0">
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                       <a href="#"><img class="d-block img-fluid" src="../fichaProducto/images/animal.jpg" alt="First slide"></a> 
                    </div>
                    <div class="carousel-item">
                      <a href="#"><img class="d-block img-fluid" src="../fichaProducto/images/green.jpg" alt="Second slide"></a>
                    </div>
                    <div class="carousel-item">
                      <a href="#"></a> <img class="d-block img-fluid" src="../fichaProducto/images/temtem.jpg" alt="Third slide"></a>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
            </div>
          </div>
          <!-- Card de videojuegos-->
  <div class="container-fluid">
    <div class="container">
  
      <div class="row pb-3 ">
        <div class="col-lg-1 offset-lg-1 ">
          <button type="button" class="btn btn-secondary fuente-1">OFERTAS</button>
        </div>
        <div class="col-lg-8 pr-0">
          <hr width="90%" />
        </div>
        <div class="col-lg-1 p-0 ">
          <button type="button" class="btnVermas"><a href="../subHome/index.php?category=Ofertas" class="Vermas fuente-1">Ver mas</a></button>
        </div>
      </div>
      <div class="row pt-2 pb-4" id="cargaOferta">
       
      </div>
      <!--Novedades-->
      <div class="row pb-3 ">
        <div class="col-lg-1 offset-lg-1 ">
          <button type="button" class="btn btn-secondary">NOVEDADES</button>
        </div>
        <div class="col-lg-8 pr-0">
          <hr width="90%" />
        </div>
        <div class="col-lg-1 p-0 ">
          <button type="button" class="btnVermas"><a href="../subHome/index.php?category=PS4" class="Vermas">Ver mas</a></button>
        </div>
      </div>
      <div class="row pt-2 pb-4" id="cargaNovedades">
        
      </div>
            <!--Recomendados-->
            <div class="row pb-3 ">
        <div class="col-lg-1 offset-lg-1 ">
          <button type="button" class="btn btn-secondary">RECOMENDADOS</button>
        </div>
        <div class="col-lg-8 pr-0">
          <hr width="90%" />
        </div>
        <div class="col-lg-1 p-0 ">
          <button type="button" class="btnVermas"><a href="../subHome/index.php?category=XONE" class="Vermas">Ver mas</a></button>
        </div>
      </div>
      <div class="row pt-2 pb-4" id="cargaRecomendados">
        
      </div>
            <!--Proximamente-->
            <div class="row pb-3 ">
        <div class="col-lg-1 offset-lg-1 ">
          <button type="button" class="btn btn-secondary">REBAJAS</button>
        </div>
        <div class="col-lg-8 pr-0">
          <hr width="90%" />
        </div>
        <div class="col-lg-1 p-0 ">
          <button type="button" class="btnVermas"><a href="../subHome/index.php?category=Rebajas" class="Vermas">Ver mas</a></button>
        </div>
      </div>
      <div class="row pt-2 pb-4" id="cargaProximamente">
        
      </div>
    </div>
  </div>
      <!-- Card de videojuegos fin-->  
  <div class="container-fluid pb-5">
    <div class="container">
      <div class="row pt-3 pb-3">
        <div class="col-lg-4 offset-lg-4">
          <hr class="text-center">
        </div>
      </div>
        <div class="">
          <div class="row pt-3 pb-3 pl-3 pr-3" id="sombra">
            <div class="col-lg-4 text-center">
              <p><i class="fas fa-award pt-3 pb-3" style="font-size:60px"  type="button"></i></p>
              <a href="#" class="titlevideogames hvideogames"><strong>GARANTIA DE DEVOLUCION DEL 100%</strong></a>
              <p class="pt-2 categoria text-center">Ofrecemos una garantia del 100 % dentro de los primeros 30 dias posteriores al pago</p>
            </div>
            <div class="col-lg-3 offset-lg-1 text-center">
              <p><i class="fab fa-keycdn pt-3 pb-3" style="font-size:60px"  type="button"></i></p>
              <a href="#" class="titlevideogames hvideogames "><strong>ENTREGA DIGITAL RAPIDA</strong></a>
              <p class="pt-2 categoria text-center">Te enviamos un correo electronico con la clave a muy tardar en 1 hora</p>
            </div>
            <div class="col-lg-3 offset-lg-1 text-center">
              <p><i class="fas fa-dollar-sign pt-3 pb-3" style="font-size:60px" type="button"></i></p>
              <a href="#" class="titlevideogames hvideogames "><strong>PRECIO MUY COMPETITIVO</strong></a>
              <p class="pt-2 categoria text-center ">Analizamos la competencia y ajustamos el precio de nuestros videojuegos para ser lo mas competitivos posibles</p>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!--Newsletter-->
  <div class="container-fluid mt-5 pt-5 pb-5" style="background-color: #FBFBFB;">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 pr-0 pl-0 pt-2 pb-2">
          <span><strong>Mantente informado</strong></span>
        </div>
        <div class="col-lg-4 pl-0">
          <div class="input-group">
            <input type = 'text' name="b" class="form-control fuente-1" id="newsletter" placeholder="Introduce el correo electronico">
            
        
            <div class="input-group-append">
            <button  style="background-color:#5AD40E;" type="button" class="input-group-text col-xs-2"><i style="font-size:25px;color: white;"class="fas fa-chevron-right fuente-1"  aria-hidden="true"></i></span>
            </div>
        </div>
        </div>
        <div class="col-lg-4 pr-0 pl-0 pt-2 pb-2 offset-lg-1">
          <p>Pago 100% seguro</p>
          <i  style="font-size:40px;" class="fab fa-cc-visa"></i>
          <i  style="font-size:40px;" class="fab fa-cc-mastercard"></i>
          <i  style="font-size:40px;" class="fab fa-cc-paypal"></i>
        </div>
      </div>
    </div>
  </div>
  <!--End of Homepage-->
  <div class="container-fluid pt-4 pb-2" style="background-color: #EFEFEF;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <p>2019-2020 © Game is life. All Rights Reserved.</p>
        </div>
        <div class="col-lg-4 offset-lg-3">
          <span class="pr-2">Quedate con nosotros</span>
          <span><i style="font-size:20px;color: blue;" class="fab fa-twitter pl-1 pr-1"></i></span>
          <span><i style="font-size:20px;" class="fab fa-instagram pl-1 pr-1"></i></span>
        </div>
      </div>
 
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="pedidosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header d-block">
        <h5 class="modal-title d-block text-center" id="exampleModalLabel">Tus pedidos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Fecha</th>
                <th scope="col">Clave</th>
                <th scope="col">Estado</th>
              </tr>
            </thead>
            <tbody id="cargaPedidos">
            
            
            </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar ventana</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="juegosCarrito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content d-block">
      <div class="modal-header d-block" style="background-color:#222729; border:1px solid #222729;">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        
      </div>
      <div class="modal-body">
          <div id="repetido" style="color:red;" class="pb-2 pt-2  mb-3 text-center " >          
          </div>
        <div id="cargaModalCesta">
          
        </div>
         <div class="row">
            <div class="col-lg-12">
                <hr>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-9 offset-lg-2 pr-5">
            <div style="background-color:#F7F7F7;" class="pt-2 pb-2"> 
              <span class=" pl-3 pr-4 mr-4 cantidadJuegosModal">(3) Videojuegos</span>
              <span class=" totalJuegosModal">Total: 693,38$</span>
            </div>
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="realizarPedido">Realizar pedido</button>
      </div>
    </div>
  </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.js"></script>
    <script src="js/home.js"></script>
  </body>
</html>