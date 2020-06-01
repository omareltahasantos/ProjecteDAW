<?php   
include('../conexionDB.php');
///CARGARA 4 VIDEOJUEGOS QUE ESTEN EN OFERTA
//echo 'Estoy en cargaOfertas';
  $id = $_GET['id_juego'];

    $videogame = new videogames($objPDO);
    $query ="SELECT * FROM videogames WHERE id_juego = '".$id."'" ;

    $result = $videogame->selectImagenJuego($query);


    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
     
    

          echo'<div class="row">
          <div class="col-lg-12">
            <p id="tituloJuegoFicha">'.$row['titulo'].'</p>
          </div>
          </div>
          <div class="row pb-4">
          <div class="col-lg-3 offset-lg-9">
            <p id="precio">'.$row['precio'].'$</p>
          </div>
          </div>
          <div class="row">
          <div class="col-lg-12">
            <hr class="m-0">
          </div>
          </div>
          <div class="row pt-3">
          <div class="col-lg-12">
            <p id="descripcion"> El mundo está dominado por la compañía eléctrica Shinra, una siniestra corporación que controla la energía mako, la fuerza vital del planeta... </p>
          </div>
          </div>
          <div class="row pt-3">
          <div class="col-lg-12">
            <p id="clave">* La clave solo incluye el videojuego * </p>
          </div>
          </div>
          <div class="row pb-5">
          <div class="col-lg-12">
            <hr class="m-0">
          </div>
          </div>
          <div class="row">
          <div class="col-lg-1">
            <span>Cantidad: </span>
          </div>
          <div class="col-lg-3 offset-lg-1 pl-4">
            <select class="browser-default custom-select" disabled>
                <option selected>1</option>
              </select>
          </div>
          <div class="col-lg-7">
          <button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4 fuente-1" id="'.$row['id_juego'].'">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>
          </div>
          </div>';

     }
    
?>