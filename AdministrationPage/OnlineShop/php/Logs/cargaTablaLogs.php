<?php
     include('../../../../Clases/conexion/conexionDB.php'); 

     $logs = new logs($objPDO);
     $result = $logs->selectAll();
     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      echo "<th>".$row["id_log"]."</th>";
      echo "<td>".$row["id_user"]."</td>";
      echo "<td>".$row["mensaje"]."</td>";
      echo "<td>".$row["fecha"]."</td>";
      echo "</tr>";
   }
?>
