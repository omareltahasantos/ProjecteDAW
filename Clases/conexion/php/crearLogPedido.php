<?php   
include('../conexionDB.php');
  session_start();
  

    $log = new logs($objPDO);
    $mensaje = "El usuario con id ". $_SESSION['id_user']. " ha hecho un pedido";
   $result = $log->grabar($_SESSION['id_user'], $mensaje);
   
    
   if ($result = 'correcto'){
      echo 'correctoLog';
    }
    
?>