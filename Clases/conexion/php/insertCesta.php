<?php
    include('../conexionDB.php');
     session_start();


        $cesta = new cesta($objPDO);
        //Compruebo que no existe otro registro en el que el mismo usuario meta dos juegos iguales en la bd; 
        $resultado = $cesta->noRepetible($_SESSION['id_user'],$_GET['id_juego']);

        
      
        if($resultado->fetch(PDO::FETCH_ASSOC) == ""){
            echo $cesta->addItem($_SESSION['id_user'],$_GET['id_juego']);

        }else{
            echo 'Juego repetido';
        }
       
    
    
?>