<?php
     include('../../../../Clases/conexion/conexionDB.php'); 

    //////BUSCA TODOS LOS REGISTROS Y SE LOS PASA EN FORMATO JSON A INDEX.PHP PARA PONERLOS EN LOS CAMPOS DEL FORM MODAL EDITAR
    if(isset($_GET['id_galeria'])){
      // echo $_GET['id_galeria'];
        

        $consulta ="SELECT * FROM galeria WHERE id_galeria ='".$_GET['id_galeria']."'";
        $galeria = new galeria($objPDO);
        $resultado = $galeria->selectgaleria($consulta);
    
        $row = $resultado->fetch(PDO::FETCH_ASSOC);
        //echo $row['id_galeria'];
        echo json_encode($row);
        //echo $row;
    }





       
   





    //var_dump($json);
   //echo $json;
    

    


?>