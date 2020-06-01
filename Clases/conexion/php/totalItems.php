<?php   
include('../conexionDB.php');
 
  session_start();
  $cesta = new cesta($objPDO);
  $resultado = $cesta->totalItems($_SESSION['id_user']);

    $row = $resultado->fetch(PDO::FETCH_ASSOC);
   
   $total =$row['total']; //Total de videojuego por esa busqueda

   echo $total;

    //while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    
   //  echo '4 resultados para la busqueda 'final'</p>';
      
    // }
     
?>