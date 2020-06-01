<?php
   include('../conexionDB.php'); 
    session_start();


    $cesta = new cesta($objPDO);
    echo $cesta->removeItem($_SESSION['id_user'],$_GET['id_juego']);

    
  







?>