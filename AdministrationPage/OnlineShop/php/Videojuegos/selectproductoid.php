<?php
     include('../../../../Clases/conexion/conexionDB.php'); 

    //////BUSCA TODOS LOS REGISTROS Y SE LOS PASA EN FORMATO JSON A INDEX.PHP PARA PONERLOS EN LOS CAMPOS DEL FORM MODAL EDITAR
    if(isset($_GET['id_juego'])){
       
        

        $consulta ="SELECT * FROM videogames WHERE id_juego ='".$_GET['id_juego']."'";
        $videogame = new videogames($objPDO);
        $resultado = $videogame->selectVideogame( $consulta);
    
        $row = $resultado->fetch(PDO::FETCH_ASSOC);
        echo json_encode($row);
        //echo $row;
    }





       
   





    //var_dump($json);
   //echo $json;
    

    


?>