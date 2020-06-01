<?php
include('../conexionDB.php');
session_start();
$videojuego = new videogames($objPDO);
$consulta = "SELECT * FROM videogames v, cesta c WHERE c.id_juego=v.id_juego and c.id_user = '" .$_SESSION['id_user']."'";
$resultado = $videojuego->selectItems($consulta);

while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
    echo '
    <div class="row">
                <div class="col-lg-4">
                  <span type="button" class="Eliminar pr-2" id = "'.$row['id_juego'].'">X</span>
                  <a href="../fichaProducto/index.php?id_juego='.$row['id_juego'].'" class="mr-3"><img src="../fichaProducto/images/'.$row['imagen'].'.png" class="img-fluid juego-cesta"></a>
                  <a href="../fichaProducto/index.php?id_juego='.$row['id_juego'].'" class="linktitulojuego-cesta text-center"><span class="titulojuego-cesta">'.$row['titulo'].'</span></a>         
                </div>
                <div class="col-lg-2 offset-lg-2 pr-0">
                  <p class="precio pt-5">'.$row['precio'].'$</p>
                </div>
                <div class="col-lg-2">
                  <div class="cantidad border border-dark mt-5 text-center mb-0">
                      1
                  </div>
                </div>
                <div class="col-lg-2 pr-0">
                  <p class="total pt-5">'.$row['precio'].'$</p>
                </div>
              </div>';
 }

?>