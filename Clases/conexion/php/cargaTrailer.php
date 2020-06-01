<?php   
include('../conexionDB.php');
///CARGARA 4 VIDEOJUEGOS QUE ESTEN EN OFERTA
//echo 'Estoy en cargaOfertas';
  $id = $_GET['id_juego'];

    $galeria = new trailer($objPDO);
    $query ="SELECT filename FROM trailer WHERE id_juego = '".$id."'" ;

    $result = $galeria->selectTrailerJuego($query);


    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
   // echo'<video width="1000" height="600" autoplay controls src="videos/'.$row['filename'].'.mp4"></video>';
      
    echo '<iframe width="1000" height="600" src="https://www.youtube.com/embed/'.$row['filename'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
     ;}
    
?>