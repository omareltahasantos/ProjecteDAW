<?php   
include('../conexionDB.php');
  $buscador = $_GET['busqueda'];
 // echo $buscador;
    $videogame = new videogames($objPDO);
   // SELECT '.$this->arrayColumnas[0].' FROM '.$this->strTableName.' WHERE '.$arrayWhereColumnas[0].' LIKE '.$this->arrayWhereValores[0]. ' ORDER BY total DESC LIMIT 5'
   $query ="SELECT titulo FROM videogames WHERE titulo LIKE '$buscador%'	" ;
    //echo $query;
    
    $result = $videogame->selectOfertas($query);


    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    
       // echo 'Estoy en el while';
      
           echo '<option value ='.$row['titulo'].'>' ;
      
     }
     
?>