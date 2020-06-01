<?php
   include('../../../../Clases/conexion/conexionDB.php'); 

   $videogames = new videogames($objPDO);
    $resultado = $videogames->selectidJuego();

    
    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
       echo '<option value="'.$row['id_juego'].'">'.$row['titulo'].'</option>';
     }
    

  







?>