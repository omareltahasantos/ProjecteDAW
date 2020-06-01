<?php
include('../conexionDB.php');
session_start();
$pedido = new pedido($objPDO);

echo $pedido->visualizar($_SESSION['id_user']);

?>