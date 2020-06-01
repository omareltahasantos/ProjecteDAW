<?php
     include('../../../../Clases/conexion/conexionDB.php'); 

    //////BUSCA TODOS LOS REGISTROS Y SE LOS PASA EN FORMATO JSON A INDEX.PHP PARA PONERLOS EN LOS CAMPOS DEL FORM MODAL EDITAR
    if(isset($_GET['id_user'])){
       
        

        $consulta ="SELECT * FROM user WHERE id_user ='".$_GET['id_user']."'";
        $user = new user($objPDO);
        $resultado = $user->selectUser( $consulta);
    
        $row = $resultado->fetch(PDO::FETCH_ASSOC);
        echo json_encode($row);
        //echo $row;
    }





       
   





    //var_dump($json);
   //echo $json;
    

    


?>