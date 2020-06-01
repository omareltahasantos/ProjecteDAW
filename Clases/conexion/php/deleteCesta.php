<?php   
include('../conexionDB.php');
  session_start();
  

    $cesta = new cesta($objPDO);
   $result = $cesta->deleteCesta($_SESSION['id_user']);

 

    
   if ($result = 'bien'){
        echo 'bien' ;
    }
    
?>