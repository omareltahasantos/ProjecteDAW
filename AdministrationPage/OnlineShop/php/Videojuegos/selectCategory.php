<?php
   include('../../../../Clases/conexion/conexionDB.php'); 

    $categorias = new categoria($objPDO);
    $resultado = $categorias->selectCategory();

    
    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
       echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
     }
    

  







?>