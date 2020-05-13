<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administracion</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link href="css/home.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!-- Custom styles for this template -->
 <script src="https://kit.fontawesome.com/c5c1cdaed3.js" crossorigin="anonymous"></script>

</head>

<body class="p-0">

  <div class="d-flex" id="wrapper" class="untoggled">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Dashboard</div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light" id="productos">Videojuegos</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="pedido">Pedido</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="cliente">Clientes</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="salir">Salir</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
         <!-- menu-toggle -->
        <div class="container-fluid cabecera text-center">
            <div class="container text-center">
                <div class="row pt-4">
                    <div class="col-md-2 ">
                        <p class="pl-2 m-0 pb-1 pr-1" ><i class="fa fa-bars menu-toggle" style="font-size:24px" id="barras" type="button"></i></p>
                        <span class="paginasCabecera menu-toggle" type="button" id="menu">Menu</span>
                    </div>
                    <div class="col-md-2 mr-5 ">
                        <p class="pl-2 m-0 pb-2"><i class="fa fa-calendar" style="font-size:24px" id="calendar" type="button"></i></p>
                        <span class="paginasCabecera" type="button" id="lanzamiento">Lanzamientos</span>
                    </div>

                    <div class="col-md-3 pl-0 ">
                        <img src="img/logo.png" alt="barras" class ="img-responsive" style="width:230px !important; height:110px !important"></p>
                    </div>
                    <div class="col-md-2 ">
                        <p class="pl-2 m-0 pb-2 pr-2"><i class="fa fa-user" style="font-size:24px" id="login" type="button"></i></p>
                        <span class="paginasCabecera" type="button" id="acceder">Acceder</span>
                    </div>
                    <div class="col-md-2 ">
                        <p class="pl-2 m-0 pb-2 pr-2"><i class="fa fa-cart-plus" style="font-size:24px" id="cart" type="button"></i></p>
                        <span class="paginasCabecera" type="button" id="carro">Cesta</span>
                    </div>
                </div>     
            </div>
        </div>
        <div class="container-fluid cabecera text-center">
            <div class="row">
                <div class="col-lg-12 m-0 p-0">
                <form method="GET" action="index.php">          
                    <div class="input-group">
                        <input type = 'text' name="b" list="browsers" class="form-control" id='buscador' placeholder="Introduce un videojuego....">
                        <datalist id="browsers">
                        </datalist>
                    
                        <div class="input-group-append">
                        <button type="button" class="input-group-text" id="submit"><i class="fa fa fa-search" id="lupa" aria-hidden="true"></i></span>
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
                    <img class="d-block img-fluid" src="img/animal.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" src="img/green.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid" src="img/temtem.jpg" alt="Third slide">
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
        <div class="container-fluid">
    <div class="container">
      <div class="row pb-3 ">
        <div class="col-lg-1 offset-lg-1 ">
          <button type="button" class="btn btn-secondary">OFERTAS</button>
        </div>
        <div class="col-lg-8 pr-0">
          <hr width="90%" />
        </div>
        <div class="col-lg-1 p-0 ">
          <button type="button" class="btnVermas">Ver mas</button>
        </div>
      </div>
      <div class="row pt-2 pb-4">
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/red dead.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>RED DEAD REDEMPTION 2</strong></a>
              </h4>
              <p class="p-0 categoria">Shooter - Juego PS4</p>
              <h5 class="price pb-2">$59.99</h5>
             <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/NBA.png" alt="" ></a>
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
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/jedi.png" alt="" ></a>
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
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/bd3.png" alt="" ></a>
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
          <button type="button" class="btnVermas">Ver mas</button>
        </div>
      </div>
      <div class="row pt-2 pb-4">
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/romancing.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>Romancing</strong></a>
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
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/civilization.png" alt="" ></a>
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
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/rome.png" alt="" ></a>
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
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/zombie.png" alt="" ></a>
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
          <button type="button" class="btnVermas">Ver mas</button>
        </div>
      </div>
      <div class="row pt-2 pb-4">
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/DBZ.png" alt="" ></a>
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
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/Mario&Sonic.png" alt="" ></a>
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
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/blairWitch.png" alt="" ></a>
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
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/waw.png" alt="" ></a>
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
          <button type="button" class="btnVermas">Ver mas</button>
        </div>
      </div>
      <div class="row pt-2 pb-4">
        <div class="col-lg-3 col-md-6 mb-4 text-center">
          <div>
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/metroExodus.png" alt="" ></a>
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
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/DoomEternal.png" alt="" ></a>
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
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/finalfantasyvii.png" alt="" ></a>
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
            <a href="#" class="text-center "><img class="img-fluid img-ofertas" src="img/Cyberpunk.png" alt="" ></a>
            <div class="card-body pt-0 pr-0 pl-0">
              <h4 class="card-title">
                <a href="#" class="titlevideogames hvideogames "><strong>CYBERPUNK:2077</strong></a>
              </h4>
              <p class="p-0 categoria">Rol/RPG - Juego PC</p>
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
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script src="js/home.js"></script>
 
</body>

</html>
