<?php
     include('../../conexion/conexionDB.php');

     $consulta = "SELECT * FROM videogames";
     $resultado = $objPDO->query($consulta);
     while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<th>".$row["id_juego"]."</th>";
      echo "<td>".$row["titulo"]."</td>";
      echo "<td>".$row["categoria"]."</td>";
      echo "<td>".$row["plataforma"]."</td>";
      echo "<td>".$row["precio"]."</td>";
      echo "<td>".$row["stock"]."</td>";
      echo "<td>".$row["estado"]."</td>";
      echo "<td><img src=img/".$row["imagen"]." style='width:80px;'></img></td>";
      ?> 
        <td><button type="button" class="btn btn-success editar"  id='<?php echo $row["id_juego"]?>' data-toggle="modal" data-target="#exampleModal" >EDITAR</button> || <button type="button" class="btn btn-danger delete" id='<?php echo $row["id_juego"]?>'>ELIMINAR</button></td> 
      <?php
       echo "</tr>";
       
   }
?>
