<?php
 include('../conexionDB.php');

        $usuario = $_GET['usuario'];
        $usuariotrim = trim($usuario," ");
        $password = $_GET['password'];
        $passwordtrim = trim($password," ");
        
        $user = new user($objPDO);
        $valido = $user->validateUser( $usuario, $password);
        if($valido== true){
            $usernorepetido = new user ($objPDO);
            $query ="SELECT nombre FROM user WHERE nombre ='".$usuariotrim."'AND password = '".$passwordtrim."'" ;
            $row = $usernorepetido->selectComprobarUser($query);
            if($row != ""){
                echo 'existe';
                
                ///ESTO ES PARA SACAR EL ID DEL USUARIO QUE ACABA DE REGISTRARSE PARA DESPUES HACER EL LOG//////////////////////////
                
                $userid = new user($objPDO);
                $consulta2 ="SELECT id_user FROM user WHERE nombre ='".$usuariotrim."'AND password = '".$passwordtrim."'" ;
                $id = $userid->selectidUser($consulta2);
                
                
                ///////////CREAMOS UN OBJETO LOG PARA PODER INSERTAR UN LOG, AL HABERSE REGISTRADO EL USUARIO
                $log =  new logs($objPDO);
                $mensaje = "El usuario con id: ".$id." se ha logeado!";
                date_default_timezone_set("Europe/Madrid");
                $fecha =   date("Y"). "-" .date("m") . "-" .date("d"). " ".date("H:i:s");
            
                $consulta3="INSERT logs (id_log,id_user,mensaje,fecha) VALUES (null,$id,'$mensaje' ,'$fecha')";
                
                if($result= $log->insertLog($consulta3)){
                    echo 'logcorrecto';
                }

            }else{
                echo 'El usuario o password no existen';
            }
    
    }else{
        foreach ($valido as &$valor) {
            echo $valor."<br>";
        }
    }
 
?>