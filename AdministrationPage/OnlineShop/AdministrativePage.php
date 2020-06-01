<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administracion</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>
  <?php
  session_start();

  
  ?>
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Dashboard</div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light" id="productos">Videojuegos</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="categorias">Categorias</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="logs">Logs</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="galerias">Galeria</a>
        <!--<a href="#" class="list-group-item list-group-item-action bg-light" id="trailer">Trailers</a>-->
        <a href="#" class="list-group-item list-group-item-action bg-light" id="visitante">Visitante</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" id="cliente">Clientes</a>
        <a href="../../homePage/index.php?usuario=<?php echo $_SESSION['usuario']?>" class="list-group-item list-group-item-action bg-light" id="salir">Volver</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Mostrar/Ocultar dashboard</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="../../homePage/cerrarsesion.php">Cerrar sesion <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
  
      <div id="divCliente" class="m-3">
            <div class="row pb-3">
              <div class="col-md-12 ">
                <h2 class="text-center">Listado de Clientes</h2>
              </div>
            </div> 
            <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Telefono</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody id="cargaClientes">
          
           
          </tbody>
        </table>
        <?php
         include "Modals/cliente/update.php"; //INSERTA EL MODAL DE INSERT DE TABLA VIDEOJUEGOS
        ?>
       </div>
      <div id="divVisitante" class="m-3">
         <div class="row pb-3">
            <div class="col-md-12 ">
              <h2 class="text-center">Listado de Visitantes</h2>
            </div>
          </div> 
          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col">Nombre</th>
              <th scope="col">Email</th>
              <th scope="col">Telefono</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody id="cargaVisitante">
          
           
          </tbody>
        </table>
        <?php
          include "Modals/visitante/update.php"; //INSERTA EL MODAL DE INSERT DE TABLA VIDEOJUEGOS
        ?>
      </div>

      <div id="divTrailer" class="m-3">
        <div class="row pb-3">
          <div class="col-md-12 ">
            <h2 class="text-center">Listado de Trailers</h2>
          </div>
        </div>
        <div class="row pb-3 pr-3">
          <div class="col-md-12 text-right">
          
            <button type="button" class="btn btn-outline-primary addTrailer" data-toggle="modal" data-target="#insertModalTrailer" id="addTrailer">Anadir Trailers</button>
          </div>
        </div>
        <?php
          include "Modals/Trailer/insert.php"; 
        ?>
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col">Codigo juego</th>
              <th scope="col">Filename</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody id="cargaTrailer">
          
           
          </tbody>
        </table>
      </div>

      <div id="divGaleria" class="m-3">
        <div class="row pb-3">
          <div class="col-md-12 ">
            <h2 class="text-center">Listado de fotos</h2>
          </div>
        </div>
        <div class="row pb-3 pr-3">
          <div class="col-md-12 text-right">
          
            <button type="button" class="btn btn-outline-primary addFotos" data-toggle="modal" data-target="#insertModalGaleria" id="addGaleria">Anadir fotos</button>
          </div>
        </div>
        <?php
          include "Modals/Galeria/insert.php"; 
        ?>
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col">Codigo juego</th>
              <th scope="col">Filename</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody id="cargaGaleria">
          
           
          </tbody>
        </table>
        <?php
          include "Modals/Galeria/update.php"; //INSERTA EL MODAL DE INSERT DE TABLA VIDEOJUEGOS
        ?>
      </div>
      <div id="divLogs" class="m-3">
         <div class="row pb-3">
            <div class="col-md-12 ">
              <h2 class="text-center">Listado de historicos</h2>
            </div>
          </div>
          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col">Codigo usuario</th>
              <th scope="col">Mensaje</th>
              <th scope="col">Fecha</th>
            </tr>
          </thead>
          <tbody id="cargaLogs">
          
           
          </tbody>
        </table>
      </div>

      <div id="divCategorias" class="m-3">
        <div class="row pb-3">
          <div class="col-md-12 ">
            <h2 class="text-center">Listado de categorias</h2>
          </div>
        </div>
        <div class="row pb-3 pr-3">
          <div class="col-md-12 text-right">
          
            <button type="button" class="btn btn-outline-primary addCategorias" data-toggle="modal" data-target="#insertModalCategoria" id="addCategorias">Anadir categorias</button>
          </div>
        </div>

        <?php
          include "Modals/Categorias/insert.php"; //INSERTA EL MODAL DE INSERT DE TABLA VIDEOJUEGOS
        ?>
        <?php
          include "Modals/Categorias/update.php"; //INSERTA EL MODAL DE INSERT DE TABLA VIDEOJUEGOS
        ?>
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col">Nombre</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody id="cargaCategorias">
          
           
          </tbody>
        </table>
      </div>

      
      <div id="products" class="m-3">
        <div class="row pb-3">
          <div class="col-md-12 ">
            <h2 class="text-center">Listado de videojuegos</h2>
          </div>
        </div>
        <div class="row pb-3 pr-3">
          <div class="col-md-12 text-right">
          
            <button type="button" class="btn btn-outline-primary add" data-toggle="modal" data-target="#insertModal" id="add">Anadir videojuegos</button>
          </div>
        </div>

        
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Codigo</th>
              <th scope="col">Titulo</th>
              <th scope="col">Categoria</th>
              <th scope="col">Plataforma</th>
              <th scope="col">Precio</th>
              <th scope="col">Stock</th>
              <th scope="col">Estado</th>
              <th scope="col">Imagen</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody id="cargaProductos">
          
           
          </tbody>
        </table>
        <?php
          include "Modals/Videojuegos/insert.php"; //INSERTA EL MODAL DE INSERT DE TABLA VIDEOJUEGOS
        ?>
       <?php
          include "Modals/Videojuegos/update.php"; //INSERTA EL MODAL DE UPDATE DE TABLA VIDEOJUEGOS
        ?>
            
      </div>
      <div id="pedidos" class="m-3">
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
      </div>
      <div id="clientes" class="m-3">
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
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
  <script src="js/index.js"></script>
  <script src="js/Videojuegos.js"></script>
  <script src="js/Categorias.js"></script>
  <script src="js/logs.js"></script>
  <script src="js/Galeria.js"></script>
  <script src="js/Trailer.js"></script>
  <script src="js/visitante.js"></script>
  <script src="js/cliente.js"></script>
</body>

</html>
