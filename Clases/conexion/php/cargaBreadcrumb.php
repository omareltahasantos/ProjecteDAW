<?php   
include('../conexionDB.php');
///CARGARA 4 VIDEOJUEGOS QUE ESTEN EN OFERTA
//echo 'Estoy en cargaOfertas';
session_start();
  $id = $_GET['id_juego'];

    $videogame = new videogames($objPDO);
    $query ="SELECT titulo,plataforma FROM videogames WHERE id_juego = '".$id."'" ;

    $result = $videogame->selectTituloJuego($query);


    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    
     echo ' <li class="breadcrumb-item itembreadcrumb"><a href="../homePage/index.php?usuario='.$_SESSION['usuario'].'">Home</a></li>';
      echo '<li class="breadcrumb-item itembreadcrumb"><a class="isDisabled">'.$row['plataforma'].'</a></li>';
      echo '<li class="breadcrumb-item active itembreadcrumb" id="juego">'.$row['titulo'].'</li>';
      
    
     }
    
?>