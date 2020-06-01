<?php   
include('../conexionDB.php');
///CARGARA 4 VIDEOJUEGOS QUE ESTEN EN OFERTA
//echo 'Estoy en cargaOfertas';
  $id = $_GET['id_juego'];

    $galeria = new galeria($objPDO);
    $query ="SELECT filename FROM galeria WHERE id_juego = '".$id."'" ;

    $result = $galeria->selectGaleriaJuego($query);


    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
     echo' 
      <div class="col-lg-3 text-center">
        <img src="images/galeria/'.$row['filename'].'.jpg" alt="" class="img-fichaproducto img-fluid">
      </div>';
   
      
    
     }
    
?>