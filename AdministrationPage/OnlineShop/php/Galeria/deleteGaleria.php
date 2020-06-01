<?php
   include('../../../../Clases/conexion/conexionDB.php'); 


if(isset($_GET['id_galeria'])){
    $galeria = new galeria($objPDO);
    $consulta= "DELETE FROM galeria WHERE id_galeria = '".$_GET['id_galeria']."'" ;

    
   
    if ($resultado = $galeria->deleteGaleria($consulta)){
        echo "El registro ha sido eliminado correctamente";
    }else{
        echo "Ha ocurrido un error al eliminar el registro";
    }
    
  

}





?>