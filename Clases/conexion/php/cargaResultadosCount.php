<?php   
include('../conexionDB.php');
  $buscador = $_GET['busqueda'];
 // echo $buscador;
    $videogame = new videogames($objPDO);
   // SELECT '.$this->arrayColumnas[0].' FROM '.$this->strTableName.' WHERE '.$arrayWhereColumnas[0].' LIKE '.$this->arrayWhereValores[0]. ' ORDER BY total DESC LIMIT 5'
   $query ="SELECT count(titulo) as total FROM videogames WHERE titulo LIKE '$buscador%'	" ;
    //echo $query;
    
    $result = $videogame->selectOfertas($query);

    $row = $result->fetch(PDO::FETCH_ASSOC);
   
   $total =$row['total']; //Total de videojuego por esa busqueda

   echo $total. " resultados para la busqueda '$buscador'";

    //while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    
   //  echo '4 resultados para la busqueda 'final'</p>';
      
    // }
     
?>