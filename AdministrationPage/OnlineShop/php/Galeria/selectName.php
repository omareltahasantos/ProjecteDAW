<?php
   include('../../../../Clases/conexion/conexionDB.php'); 
    //echo $_GET['id_galeria'];
    
    $galeria = new galeria($objPDO);
    $consulta ="SELECT * FROM galeria WHERE id_galeria ='".$_GET['id_galeria']."'";
   // echo $consulta;
    
    $resultado = $galeria->selectGaleria($consulta);
   
      //HACER CONSULTA PARA SACAR EL id_juego del codigo de galeria
      $row = $resultado->fetch(PDO::FETCH_ASSOC);

       $id_juego=$row['id_juego'];
        
     
      

      $consulta ="SELECT * FROM videogames WHERE id_juego ='".$id_juego."'";
      $videogame = new videogames($objPDO);
      $resultado = $videogame->selectVideogame( $consulta);
      $row = $resultado->fetch(PDO::FETCH_ASSOC);
      
      echo $row['titulo'];
    //while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
  //     echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
    // }
    

  







?>