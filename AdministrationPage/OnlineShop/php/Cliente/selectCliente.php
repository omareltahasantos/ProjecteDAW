<?php
   include('../../../../Clases/conexion/conexionDB.php'); 

    $user = new user($objPDO);
    $consulta = "SELECT nombre FROM user WHERE id_user='".$_GET['id_user']."'";
    $resultado = $user->selectNombreUser($consulta);

   echo $resultado;
  







?>