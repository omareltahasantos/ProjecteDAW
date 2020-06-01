<?php
   include('../../../../Clases/conexion/conexionDB.php'); 


if(isset($_GET['id_categoria'])){
    $categoria = new categoria($objPDO);
    $consulta= "DELETE FROM categoria WHERE id_categoria = '".$_GET['id_categoria']."'" ;

    
   
    if ($resultado = $categoria->deleteCategoria($consulta)){
        echo "El registro ha sido eliminado correctamente";
    }else{
        echo "Ha ocurrido un error al eliminar el registro";
    }
    
  

}





?>