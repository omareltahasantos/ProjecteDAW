<?php
include('../conexionDB.php');
session_start();


$cestaVideogame = new cesta($objPDO);

$resultado = $cestaVideogame->totalPrice($_SESSION['id_user']);
$row = $resultado->fetch(PDO::FETCH_ASSOC);
$total = $row['total'];

//$totalprice = bcdiv($total, '1', 2) . "$";

$totalConvertida =  sprintf("%.2f", $total);

echo $totalConvertida.'$';


?>