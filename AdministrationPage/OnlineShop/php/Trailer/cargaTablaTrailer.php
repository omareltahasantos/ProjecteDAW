<?php
     include('../../../../Clases/conexion/conexionDB.php'); 


     $trailer = new trailer($objPDO);
     $resultado = $trailer->selectAll();
 
     while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<th>".$row["id_trailer"]."</th>";
      echo "<td>".$row["id_juego"]."</td>";
      echo "<td>".$row["filename"]."</td>";
     
      ?> 
        <td><button type="button" class="btn btn-success editarTrailer" id='<?php echo $row["id_trailer"]?>' data-toggle="modal" data-target="#updateModalTrailer" >EDITAR</button> || <button type="button" class="btn btn-danger deleteTrailer" id='<?php echo $row["id_trailer"]?>'>ELIMINAR</button></td> 
        <?php
      }
      echo '</tr>';
     ?>
 
  