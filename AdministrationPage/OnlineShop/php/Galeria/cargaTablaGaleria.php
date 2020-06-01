<?php
     include('../../../../Clases/conexion/conexionDB.php'); 


     $galeria = new galeria($objPDO);
     $resultado = $galeria->selectAll();
 
     while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<th>".$row["id_galeria"]."</th>";
      echo "<td>".$row["id_juego"]."</td>";
      echo "<td><img src=../../fichaProducto/images/galeria/".$row['filename'].".png style='width:80px;'></img></td>";
     
      ?> 
        <td><button type="button" class="btn btn-success editarGaleria" id='<?php echo $row["id_galeria"]?>' data-toggle="modal" data-target="#updateModalGaleria" >EDITAR</button> || <button type="button" class="btn btn-danger deleteGaleria" id='<?php echo $row["id_galeria"]?>'>ELIMINAR</button></td> 
        <?php
      }
      echo '</tr>';
     ?>
 
  