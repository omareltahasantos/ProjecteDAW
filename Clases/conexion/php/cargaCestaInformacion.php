<?php
include('../conexionDB.php');
session_start();
$videojuego = new videogames($objPDO);
$consulta = "SELECT * FROM videogames v, cesta c WHERE c.id_juego=v.id_juego and c.id_user = '" .$_SESSION['id_user']."'";
$resultado = $videojuego->selectItems($consulta);

while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
     echo ' <div class="row pt-4 pl-5">
        <div class="col-lg-8">
            <a href="../fichaProducto/index.php?id_juego='.$row['id_juego'].'" class="mr-3"><img src="../fichaProducto/images/'.$row['imagen'].'.png" class="img-fluid juego-cesta aimagen"></a>
            <a href="../fichaProducto/index.php?id_juego='.$row['id_juego'].'" class="linktitulojuego-cesta text-center"><span class="titulojuego-cesta pr-5">'.$row['titulo'].'</span></a><span class="titulojuego-cesta pr-3" id="multiplicador">x1</span>    
        </div>
        <div class="col-lg-1 pt-5">
          <span class="preciocart">'.$row['precio'].'$</span>  
        </div>
      </div>';
 }

?>