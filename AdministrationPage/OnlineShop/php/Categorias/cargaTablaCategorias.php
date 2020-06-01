<?php
     include('../../../../Clases/conexion/conexionDB.php'); 


     $categorias = new categoria($objPDO);
     $resultado = $categorias->selectCategory();
 
     while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<th>".$row["id_categoria"]."</th>";
      echo'        <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>';
      echo "<td>".$row["nombre"]."</td>";
      echo '        <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>';
      ?> 
        <td><button type="button" class="btn btn-success editarCategoria" id='<?php echo $row["id_categoria"]?>' data-toggle="modal" data-target="#updateModalCategoria" >EDITAR</button> || <button type="button" class="btn btn-danger deleteCategoria" id='<?php echo $row["id_categoria"]?>'>ELIMINAR</button></td> 
        <?php
      }
     ?>
 
  