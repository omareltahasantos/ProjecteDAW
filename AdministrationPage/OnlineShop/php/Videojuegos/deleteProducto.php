<?php
   include('../../../../Clases/conexion/conexionDB.php'); 


if(isset($_GET['id_juego'])){
    $videogame = new videogames($objPDO);
    $consulta= "DELETE FROM videogames WHERE id_juego = '".$_GET['id_juego']."'" ;

    
   
    if ($resultado = $videogame->deleteVideogame($consulta)){
        echo "El registro ha sido eliminado correctamente";
    }else{
        echo "Ha ocurrido un error al eliminar el registro";
    }
    
  

}





?>