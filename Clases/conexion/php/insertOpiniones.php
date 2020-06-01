<?php   
include('../conexionDB.php');
///CARGARA 4 VIDEOJUEGOS QUE ESTEN EN OFERTA
//echo 'Estoy en cargaOfertas';
  $idUser= $_GET['id_user'];
  $idJuego= $_GET['id_juego'];
  $opinion= $_GET['mensaje'];
  date_default_timezone_set("Europe/Madrid");
  $fecha =   date("Y"). "-" .date("m") . "-" .date("d");
    $opinion1 = new opinion($objPDO);
    $query ="INSERT INTO opiniones(id_user,id_juego,mensaje,fecha) VALUES ($idUser,$idJuego,'$opinion','$fecha')";

    
    if ($result = $opinion1->insertOpinion($query)){
      echo 'bien';
    }
    
?>