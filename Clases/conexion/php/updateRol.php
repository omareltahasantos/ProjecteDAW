<?php   
include('../conexionDB.php');
  session_start();
  

    $pedido = new pedido($objPDO);
   $result = $pedido->changeRol($_SESSION['id_user']);
   
    
   if ($result = 'correcto'){
        echo $_SESSION['usuario']  ;
    }
    
?>