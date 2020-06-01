<?php
     include('../../../../Clases/conexion/conexionDB.php'); 

     $user = new user($objPDO);
     $consulta = "SELECT * FROM user WHERE rol='visitante'";
     $result = $user->selectUser($consulta);
     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<th>".$row["id_user"]."</th>";
      echo "<td>".$row["nombre"]."</td>";
      echo "<td>".$row["email"]."</td>";
      echo "<td>".$row["telefono"]."</td>";
      ?> 
        <td><button type="button" class="btn btn-success editarVisitante" id='<?php echo $row["id_user"]?>' data-toggle="modal" data-target="#updateModalVisitante">EDITAR</button> || <button type="button" class="btn btn-danger deleteVisitante" id='<?php echo $row["id_user"]?>'>ELIMINAR</button></td> 
      <?php
       echo "</tr>";
       
   }
?>
