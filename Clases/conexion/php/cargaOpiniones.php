<?php   
include('../conexionDB.php');
///CARGARA 4 VIDEOJUEGOS QUE ESTEN EN OFERTA
//echo 'Estoy en cargaOfertas';
$idUser= $_GET['id_user'];
$idJuego= $_GET['id_juego'];
$opinion= $_GET['mensaje'];


    $opinion1 = new opinion($objPDO);
    $query ="SELECT mensaje, nombre, fecha from opiniones o, user u where u.id_user = o.id_user AND id_juego = '".$idJuego."'";

    $result = $opinion1->selectOpinionesJuego($query);


    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo '<div class="row pt-3">
      <div class="col-lg-12">
        <p class="autor-comments">'.$row['nombre'].' - ' .$row['fecha'].'</p>
      </div>
    </div>
    <div class="row pt-1">
    <div class="col-lg-9">
      <p class="comments">'.$row['mensaje'].'</p>
    </div>
    <div class="col-lg-3">
      <a class="report">Reportar comentario</a>
    </div>
    </div>
    ';
     }
    
?>