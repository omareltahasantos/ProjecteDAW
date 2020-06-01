<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/pushbar.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/cesta.css">
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
    session_start();
    include('../Clases/conexion/conexionDB.php');
    
      //echo $nombre;
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
                
                    <a href="../homePage/index.php?usuario=<?php echo $_SESSION['usuario'];?>" class="enlace"><img src="../fichaProducto/images/logo.png" alt="barras" class ="img-responsive" style="width:230px !important; height:110px !important"></p></a>
                  </div>
                  <?php
                     if(isset($_SESSION['usuario'])){
                      $userrol = new user($objPDO);
                      $consulta ="SELECT rol FROM user WHERE nombre ='".$_SESSION['usuario']."'" ;
                      $rol= $userrol->selectRol($consulta);
                      if($rol == "visitante"){
                        ?>
                         <div class="col-md-2 ">
                        <p class="pl-2 m-0 pb-1 pr-2"><i class="fa fa-user" style="font-size:24px" id="login" type="button"></i></p>
                        <span class="paginasCabecera" type="button" ><a href="#" class="enlace fuente-1" id="acceder"><?php echo $_SESSION['usuario'];?></a></span>
                       </div>
                       <?php
                      }else if($rol == "cliente"){
                        ?>
                      <div class="col-md-2 ">
                           <p class="pl-2 m-0 pb-1 pr-2"><i class="fa fa-user" style="font-size:24px" id="login" type="button"></i></p>
                          <span class="paginasCabecera" type="button" ><a href="#" class="enlace fuente-1" id="acceder" data-toggle="modal" data-target="#pedidosModal"><?php echo 'Ver pedidos';?></a></span>
                       </div>
                       
                      <?php
                      } else if($rol == "admin"){
                      ?>
                      <?php
                       
                        ?>
                         <div class="col-md-2 ">
                        <p class="pl-2 m-0 pb-1 pr-2"><i class="fa fa-user" style="font-size:24px" id="login" type="button"></i></p>
                        <span class="paginasCabecera" type="button" ><a href="../AdministrationPage/OnlineShop/AdministrativePage.php" class="enlace fuente-1" id="acceder"><?php echo 'Admin page';?></a></span>
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
                         if(isset($_SESSION['usuario'])){
                          ?>
                           <h4 class="fuente-1">Bienvenido/a <?php echo $_SESSION['usuario']; ?></h4>
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
                  <a href="../homePage/cerrarsesion.php" class="menu-sidebar fuente-1">Cerrar Sesion</a>  
                </div>
      
              </div>
            </nav>
        
          </div>
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
  <!--Cesta--> 
         <div class="container-fluid">
           <div class="container">
           <div class="row pt-3">
           
           </div>
             <div class="row pt-5 pb-5 text-center">
               <div class="col-lg-3 offset-lg-4">
                 <h1>TU CESTA</h1>
               </div>
             </div>
             <div class="row">
               <div class="col-lg-4">
                 <p>Producto</p>
               </div>
               <div class="col-lg-2 offset-lg-2 pr-0">
                 <p>Precio</p>
               </div>
               <div class="col-lg-2 pl-0">
                 <p>Cantidad</p>
               </div>
               <div class="col-lg-2">
                 <p>Total</p>
               </div>
             </div>
             <div class="row ">
               <div class="col-lg-11 pl-0">
                 <hr>
               </div>
             </div>
             <div id="cargaCesta">
              
             </div>
        
        
             <div class="row">
               <div class="col-lg-3 offset-lg-9">
                 <hr>
               </div>
             </div>
             <div class="row">
               <div class="col-lg-2 offset-lg-7">
                  <p style="color:black;">TOTAL CESTA:</p>
               </div>
               <div class="col-lg-2 offset-lg-1">
                 <p class="precioTotal">180.00$</p>
               </div>
             </div>
             <div class="row pt-5">
               <div class="col-lg-8 offset-lg-4 pr-0 pl-5">
               En caso de no haber mucha demanda, recibirás la clave en las siguientes 24 horas
               </div>
             </div>
             <div class="row pt-5 mr-3">
               <div class="col-lg-3 offset-lg-9">
                 <a class="boton_personalizado" href="../homePage/index.php?usuario=<?php echo $_SESSION['usuario']?>" id="seguirComprando">SEGUIR COMPRANDO</a>
                 <a class="boton_personalizado2" href="../informacion/index.php" id="pagar">PAGAR</a>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.js"></script>
    <script src="js/cesta.js"></script>
  </body>
</html>