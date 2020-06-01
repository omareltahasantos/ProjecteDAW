<?php   
include('../conexionDB.php');
///CARGARA 4 VIDEOJUEGOS QUE ESTEN EN OFERTA
//echo 'Estoy en cargaOfertas';
  $id = $_GET['id_juego'];

    $videogame = new videogames($objPDO);
    $query ="SELECT imagen FROM videogames WHERE id_juego = '".$id."'" ;

    $result = $videogame->selectImagenJuego($query);


    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
     
     echo '<img class="img-fluid img-ofertas pt-2 " src="images/'.$row['imagen'].'.png" alt="" >';
      
    
     }
    
?>