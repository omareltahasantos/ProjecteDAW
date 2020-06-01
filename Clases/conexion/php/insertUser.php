<?php
 include('../conexionDB.php');
    $usuario = $_GET['usuario'];
    $usuariotrim = trim($usuario," ");
    $password = $_GET['password'];
    $passwordtrim = trim($password," ");
    $email = $_GET['email'];
    $emailtrim = trim($email," ");
    $telefono = $_GET['telefono'];
    $telefonotrim = trim($telefono," ");

    $user = new user($objPDO);
    $valido = $user->validateUser( $usuario, $password, $email, $telefono);
    if($valido== true){
        $usernorepetido = new user ($objPDO);
        $query ="SELECT nombre FROM user WHERE nombre ='".$usuariotrim."'AND password = '".$passwordtrim."'" ;
        $row = $usernorepetido->selectComprobarUser($query);
        if($row == ""){
            $user = new user($objPDO);
            $consulta="INSERT user (id_user,nombre,email,password,direccion,telefono,pais,codigoPostal,provincia,creditCard,rol) VALUES (null,'$usuariotrim','$emailtrim' ,'$passwordtrim',null,$telefonotrim,null,null,null,null,'visitante')";
            if ($resultado = $user->insertUser($consulta)){
                echo 'bien1';
                
                $userid = new user($objPDO);
                $consulta2 ="SELECT id_user FROM user WHERE nombre ='".$usuariotrim."'AND password = '".$passwordtrim."'" ;
                $id = $userid->selectidUser($consulta2);
                echo 'bien2';
           
                $log =  new logs($objPDO);
                $mensaje = "El usuario con id: ".$id." se ha registrado!";

                //date_default_timezone_set("Europe/Madrid");
               // $fecha =   date("Y"). "-" .date("m") . "-" .date("d"). " ".date("H:i:s");
                $consulta3="INSERT logs (id_log,id_user,mensaje,fecha) VALUES (null,$id,'$mensaje' ,'2020-05-29 10:25:07')";
                
                if($result= $log->insertLog($consulta3)){
                    echo 'bien3';
                }
            }else{
                echo 'No se ha hecho ninguna consulta';
            }
        }else{
            echo 'El usuario ya existe';
        }
        
    }else {
        foreach ($valido as &$valor) {
            echo $valor."<br>";
        }
    }


   
    

    
  

   

/*

*/

?>