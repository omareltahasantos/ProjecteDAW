<?php
   include('../../../../Clases/conexion/conexionDB.php'); 


  echo $_FILES['file']['name'];
  // echo $_GET['usuario'];
   //$fileName = $_FILES['file']['name'];
   //echo $fileName;
/*
if(isset($_GET['id_juego'])&& isset($_GET['trailer'])){
  
  $trailer = new trailer($objPDO);
  $consulta="INSERT trailer (id_juego,filename) VALUES ($_GET[id_juego],'$_GET[trailer]')";

  if ( $resultado = $trailer->insertTrailer($consulta)){
    echo '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
    <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
    <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
  </svg>
  <p class="success">El registro se ha guardado correctamente</p';   
  }else{
     echo 'error';
  }
   

   
}

*/


?>