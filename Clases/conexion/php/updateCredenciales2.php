<?php
include('../conexionDB.php');

session_start();


    $user = new user($objPDO);
    $consulta="UPDATE user SET creditCard ='".$_GET['numero']."' WHERE id_user = '".$_SESSION['id_user']."'" ;
   //echo $consulta;
    
  



if ($resultado = $user->updateUser($consulta)){
 echo 'correcto';
}



?>