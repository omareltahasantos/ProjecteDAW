<?php
   include('../../../../Clases/conexion/conexionDB.php'); 


if(isset($_GET['id_user'])){
    $logs = new logs($objPDO);
    $consulta= "DELETE FROM logs WHERE id_user = '".$_GET['id_user']."'" ;
    if($resultado = $logs->deleteUserLogs($consulta)){
        $user = new user($objPDO);
        $consulta= "DELETE FROM user WHERE id_user = '".$_GET['id_user']."'" ;

        if ($resultado = $user->deleteUser($consulta)){
            echo "El registro ha sido eliminado correctamente";
        }else{
            echo "Ha ocurrido un error al eliminar el registro";
        }
    }
   
    
  

}





?>