<?php
     include('../../../../Clases/conexion/conexionDB.php'); 

     $videogame = new videogames($objPDO);
     $result = $videogame->selectAll();
     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<th>".$row["id_juego"]."</th>";
      echo "<td>".$row["titulo"]."</td>";
      echo "<td>".$row["categoria"]."</td>";
      echo "<td>".$row["plataforma"]."</td>";
      echo "<td>".$row["precio"]."</td>";
      echo "<td>".$row["stock"]."</td>";
      echo "<td>".$row["estado"]."</td>";
      echo "<td><img src=../../fichaProducto/images/".$row['imagen'].".png style='width:80px;'></img></td>";
      ?> 
        <td><button type="button" class="btn btn-success editar" id='<?php echo $row["id_juego"]?>' data-toggle="modal" data-target="#exampleModal" >EDITAR</button> || <button type="button" class="btn btn-danger delete" id='<?php echo $row["id_juego"]?>'>ELIMINAR</button></td> 
      <?php
       echo "</tr>";
       
   }
?>
