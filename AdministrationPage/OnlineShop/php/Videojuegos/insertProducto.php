<?php
    include('../../conexion/conexionDB.php');


if(isset($_GET['title']) && isset($_GET['category']) && isset($_GET['price']) && isset($_GET['status'])&& isset($_GET['platform']) && isset($_GET['stock']) && isset($_GET['image'])){
   
 
    
    $consulta="INSERT videogames (id_juego,titulo,categoria,plataforma,precio,stock,estado,imagen) VALUES (null, '$_GET[title]', '$_GET[category]', '$_GET[platform]',$_GET[price], $_GET[stock], '$_GET[status]', '$_GET[image]')";

   
}
/*
$_GET['id_juego'] = 2;
$_GET['palabra'] = 'afafaf';
$c = 'afgafgag';
$d= 'afafaf';
$e = 23;
$h = 12;
$j = 'afafaf';
$n = 'hola.png';

$consulta="INSERT videogames(id_juego) 
VALUES ($_GET[id_juego])";
//echo $consulta;
*/
if ($resultado = $objPDO->query($consulta)){
  echo '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
  <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
  <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
</svg>
<p class="success">El registro se ha guardado correctamente</p';   
}else{
   
}


?>