<?php
include('../conexionDB.php');

session_start();


    $user = new user($objPDO);
    $consulta="UPDATE user SET nombre ='".$_GET['nombre']."', email = '".$_GET['email']."', telefono = '".$_GET['telefono']."', direccion = '".$_GET['direccion']."', pais = '".$_GET['pais']."', codigoPostal = '".$_GET['codigoPostal']."', provincia = '".$_GET['provincia']."', apellidos = '".$_GET['apellidos']."', apartamento = '".$_GET['apartamento']."' WHERE id_user = '".$_SESSION['id_user']."'" ;
   
    
  



if ($resultado = $user->updateUser($consulta)){
 echo 'correcto';
}



?>