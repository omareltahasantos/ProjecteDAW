<?php
include('../conexionDB.php');
session_start();

$consulta ="SELECT * FROM user WHERE id_user ='".$_SESSION['id_user']."'";
//echo $consulta;

$user = new user($objPDO);
$resultado = $user->selectUser($consulta);

$row = $resultado->fetch(PDO::FETCH_ASSOC);
echo json_encode($row);



?>


