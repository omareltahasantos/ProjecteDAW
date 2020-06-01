<?php
     include('../../../../Clases/conexion/conexionDB.php'); 

    //////BUSCA TODOS LOS REGISTROS Y SE LOS PASA EN FORMATO JSON A INDEX.PHP PARA PONERLOS EN LOS CAMPOS DEL FORM MODAL EDITAR
    if(isset($_GET['id_categoria'])){
      // echo $_GET['id_categoria'];
        

        $consulta ="SELECT * FROM categoria WHERE id_categoria ='".$_GET['id_categoria']."'";
        $categoria = new categoria($objPDO);
        $resultado = $categoria->selectCategoria($consulta);
    
        $row = $resultado->fetch(PDO::FETCH_ASSOC);
        //echo $row['id_categoria'];
        echo json_encode($row);
        //echo $row;
    }





       
   





    //var_dump($json);
   //echo $json;
    

    


?>