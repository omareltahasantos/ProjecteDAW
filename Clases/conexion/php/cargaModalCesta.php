<?php
include('../conexionDB.php');
session_start();
$videojuego = new videogames($objPDO);
$consulta = "SELECT * FROM videogames v, cesta c WHERE c.id_juego=v.id_juego and c.id_user = '" .$_SESSION['id_user']."'";
$resultado = $videojuego->selectItems($consulta);

while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
     echo ' <div class="row pl-4">
      <div class="col-lg-3">
        <img class="img-fluid img-ofertas" src="../fichaProducto/images/'.$row['imagen'].'.png" alt="" >
      </div>
      <div class="col-lg-9">
        <div class="row">
                <div class="col-lg-12 pt-1 pb-0">
                    <p class="titleModal">'.$row['titulo'].'</p>    
                </div>
          </div>
          <div class="row">
                <div class="col-lg-12 pb-0">
                    <p class="cantidadModal">Cantidad: 1</h4>    
                </div>
          </div>
          <div class="row">
                <div class="col-lg-12 pb-0">
                    <p class="precioModal">'.$row['precio'].'$</p>    
                </div>
          </div>
      </div>
    </div>';

 }

?>