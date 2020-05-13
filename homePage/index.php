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
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');
    
   </style>

  </head>
  <body class="p-0 fuente-1">
		
	
        <!-- Page Content  -->
      <div id="content" class="p-0 ">

       
           <div class="container-fluid cabecera text-center ">
              <div class="container">
                
                <div class="row pt-4">
                  <div class="col-md-2 ">
                      <p class="pl-2 m-0 pb-1 pr-1" ><i class="fa fa-bars " style="font-size:24px" id="barras" type="button"></i></p>
                      <span class="paginasCabecera  fuente-1" type="button" id="menu">Menu</span>
                  </div>
                  <div class="col-md-2 mr-5 ">
                      <p class="pl-2 m-0 pb-1"><i class="fa fa-calendar" style="font-size:24px" id="calendar" type="button"></i></p>
                      <span class="paginasCabecera" type="button" ><a href="#" class="enlace fuente-1" id="lanzamiento">Lanzamientos</a></span>
                  </div>
  
                  <div class="col-md-3 pl-0 ">
                
                    <a href="#" class="enlace"><img src="images/logo.png" alt="barras" class ="img-responsive" style="width:230px !important; height:110px !important"></p></a>
                  </div>
                  <?php
                     if(isset($_GET['usuario'])){
                    ?>
                      <div class="col-md-2 ">
                        <p class="pl-2 m-0 pb-1 pr-2"><i class="fa fa-user" style="font-size:24px" id="login" type="button"></i></p>
                        <span class="paginasCabecera" type="button" ><a href="#" class="enlace fuente-1" id="acceder"><?php echo $_GET['usuario'];?></a></span>
                      </div>
                      <?php
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
                      <span class="paginasCabecera" type="button" ><a href="#" class="enlace fuente-1" id="carro">Cesta</a></span>
                  </div>
               </div>
            </div> 
          </div>
          <!--Pushbar menu-->
          <div data-pushbar-id="pushbar-menu" data-pushbar-direction="left" class="pushbar-menu push-menu">
            <button id="pushbar-close" data-pushbar-close class="float-right">X</button>
            <nav id="sidebar">
              <div class="p-4 pt-5 ">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
                <div class="row text-center pb-3 fixed">
                  <div class="col-lg-12 ">
                    <h4 class="fuente-1">Bienvenida Laura</h4>
                    <hr style="background-color:grey;">
                  </div>
                </div>
                <div class="row pl-3 pb-3 ">
                  <div class="col-md-12 ">
                   <a href="#" class="menu-sidebar fuente-1">Ofertas</a>      
                  </div>
                </div>
                <div class="row pl-3 pb-3">
                  <div class="col-md-12 ">
                    <a href="#" class="menu-sidebar fuente-1">Rebajas</a>  
                  </div>
                </div>
                <div class="row pl-3 pb-3">
                  <div class="col-md-12 ">
                    <a href="#" class="menu-sidebar fuente-1">Lanzamientos</a>  
                  </div>
                </div>
                <div class="row pl-3 pb-3">
                  <div class="col-md-12 ">
                    <a href="#" class="menu-sidebar fuente-1">Playstation 4</a>  
                  </div>
                </div>
                <div class="row pl-3 pb-3">
                  <div class="col-md-12 ">
                    <a href="#" class="menu-sidebar fuente-1">Xbox One</a>  
                  </div>
                </div>
                <div class="row pl-3 pb-3">
                  <div class="col-md-12 ">
                    <a href="#" class="menu-sidebar fuente-1">Nintendo Switch</a>  
                  </div>
                </div>
                <div class="row pl-3 pb-3">
                  <div class="col-md-12 ">
                    <a href="#" class="menu-sidebar fuente-1">PC</a>  
                  </div>
                </div>
                <div class="row text-center pb-3">
                  <div class="col-lg-12">
                    <hr style="background-color:grey;">   
                  </div>
                </div>
                <div class="footer">
                  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
      
              </div>
            </nav>
        
          </div>

          <!--pushbar carrito de la compra-->
         
          <!--Final carrito de la compra-->


          <div class="container-fluid cabecera text-center">
            <div class="row">
                <div class="col-lg-12 m-0 p-0">
                <form method="GET" action="index.php">          
                    <div class="input-group">
                        <input type = 'text' name="b" list="browsers" class="form-control fuente-1" id='buscador' placeholder="Introduce un videojuego....">
                        <datalist id="browsers">
                        </datalist>
                    
                        <div class="input-group-append">
                        <button type="button" class="input-group-text" id="submit"><i class="fa fa fa-search fuente-1" id="lupa" aria-hidden="true"></i></span>
                        </div>
                    </div>
                 </form>
                </div>
            </div>
        </div>
        <!-- Page Content Slider -->
          <div class="container-fluid">
            <div class="container">
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
                       <a href="#"><img class="d-block img-fluid" src="images/animal.jpg" alt="First slide"></a> 
                    </div>
                    <div class="carousel-item">
                      <a href="#"><img class="d-block img-fluid" src="images/green.jpg" alt="Second slide"></a>
                    </div>
                    <div class="carousel-item">
                      <a href="#"></a> <img class="d-block img-fluid" src="images/temtem.jpg" alt="Third slide"></a>
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
          <button type="button" class="btnVermas"><a href="#" class="Vermas fuente-1">Ver mas</a></button>
        </div>
      </div>
      <div class="row pt-2 pb-4">
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/red dead.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames fuente-1 "><strong>RED DEAD REDEMPTION 2</strong></a>
              </h4>
              <p class="p-0 categoria fuente-1">Shooter - Juego PS4</p>
              <h5 class="price pb-2 fuente-1">$59.99</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4 fuente-1">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/NBA.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>NBA 2K20</strong></a>
              </h4>
              <p class="p-0 categoria">Deportes- Juego Switch</p>
              <h5 class="price pb-2">$30.63</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 P-0 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/jedi.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>STAR WARS:FALLEN ORDER</strong></a>
              </h4>
              <p class="p-0 categoria">Aventura/Accion - Juego PC</p>
              <h5 class="price pb-2">$50.95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9734; &#9734; &#9734;</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/bd3.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>BORDERLANDS 3</strong></a>
              </h4>
              <p class="p-0 categoria">Shooter - Juego XONE</p>
              <h5 class="price pb-2">$30,95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
            </div>
          </div>
        </div>
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
          <button type="button" class="btnVermas"><a href="#" class="Vermas">Ver mas</a></button>
        </div>
      </div>
      <div class="row pt-2 pb-4">
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/romancing.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>ROMANCING</strong></a>
              </h4>
              <p class="p-0 categoria">Rol/RPG - Juego Switch</p>
              <h5 class="price pb-2">$49.95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/civilization.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>CIVILIZATION VI</strong></a>
              </h4>
              <p class="p-0 categoria">Estrategia- Juego PS4</p>
              <h5 class="price pb-2">$26.95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 P-0 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/rome.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>ROME 2: SPECIAL EDITION</strong></a>
              </h4>
              <p class="p-0 categoria">Estrategia- Juego PC</p>
              <h5 class="price pb-2">$50.95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9734; &#9734; &#9734;</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/zombie.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>ZOMBIE ARMY 4</strong></a>
              </h4>
              <p class="p-0 categoria">Accion/Aventura - Juego XONE</p>
              <h5 class="price pb-2">$30,95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
            </div>
          </div>
        </div>
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
          <button type="button" class="btnVermas"><a href="#" class="Vermas">Ver mas</a></button>
        </div>
      </div>
      <div class="row pt-2 pb-4">
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/DBZ.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>DRAGON BALL Z : KAKAROT</strong></a>
              </h4>
              <p class="p-0 categoria">Aventura - Juego PS4</p>
              <h5 class="price pb-2">$59.95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/Mario&Sonic.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>MARIO & SONIC</strong></a>
              </h4>
              <p class="p-0 categoria">Deportes- Juego Switch</p>
              <h5 class="price pb-2">$49.95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 P-0 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/blairWitch.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>BLAIR WITCH</strong></a>
              </h4>
              <p class="p-0 categoria">Aventura - Juego XONE</p>
              <h5 class="price pb-2">$26.95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9734; &#9734; &#9734;</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/waw.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>WORLD OF WARCRAFT</strong></a>
              </h4>
              <p class="p-0 categoria">Aventura/Accion - Juego PC</p>
              <h5 class="price pb-2">$14,95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
            </div>
          </div>
        </div>
      </div>
            <!--Proximamente-->
            <div class="row pb-3 ">
        <div class="col-lg-1 offset-lg-1 ">
          <button type="button" class="btn btn-secondary">PROXIMAMENTE</button>
        </div>
        <div class="col-lg-8 pr-0">
          <hr width="90%" />
        </div>
        <div class="col-lg-1 p-0 ">
          <button type="button" class="btnVermas"><a href="#" class="Vermas">Ver mas</a></button>
        </div>
      </div>
      <div class="row pt-2 pb-4">
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/metroExodus.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>METRO REDUX</strong></a>
              </h4>
              <p class="p-0 categoria">Shooter - Juego Switch</p>
              <h5 class="price pb-2">$45.95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/DoomEternal.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>DOOM ETERNAL</strong></a>
              </h4>
              <p class="p-0 categoria">Shooter- Juego XONE</p>
              <h5 class="price pb-2">$59.95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/finalfantasyvii.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>FINAL FANTASY VII:REMAKE</strong></a>
              </h4>
              <p class="p-0 categoria">Aventura- Juego PS4</p>
              <h5 class="price pb-2">$59.95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="images/Cyberpunk.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>CYBERPUNK:2077</strong></a>
              </h4>
              <p class="p-0 categoria">Aventura- Juego PS4</p>
              <h5 class="price pb-2">$49,95</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
            </div>
          </div>
        </div>
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
            <button  style="background-color:#5AD40E;" type="button" class="input-group-text col-xs-2"><i style="font-size:25px;color: white;"class="fas fa-chevron-right fuente-1" id="lupa" aria-hidden="true"></i></span>
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