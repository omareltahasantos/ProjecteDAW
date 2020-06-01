<?php   
include('../conexionDB.php');
  session_start();
  

    $pedido = new pedido($objPDO);
   $result = $pedido->crearPedido($_SESSION['id_user'],$_GET['codigo']);
   
    
   if ($result = 'correcto'){
        echo $_SESSION['usuario']  ;
    }
    
?>