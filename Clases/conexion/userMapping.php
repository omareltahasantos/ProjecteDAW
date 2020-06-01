<?php
    class user extends DataBoundObject{
        protected $id;
        protected $nombre;
        protected $email;
        protected $password;
        protected $direccion;
        protected $telefono;
        protected $poblacion;
        protected $codigoPostal;
        protected $provincia;
        protected $creditCard;
        protected $rol;
        protected $valida;


        protected function DefineTableName() {
            return("user");
    }
    
        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "nombre" => "nombre",
                        "email" => "email",
                        "password" => "password",
                        "direccion" => "direccion",
                        "telefono" => "telefono",
                        "poblacion" => "poblacion",
                        "codigoPostal" => "codigoPostal",
                        "provincia" => "provincia",
                        "creditCard" => "creditCard",
                        "rol" => "rol"));
        }
    
        public function validateUser($login= NULL,$password = NULL, $email = NULL, $telefono = NULL){
            $error =array();
            if(isset($login)){
                //variables
                $this->nombre=$login;
                $usuariotrim = trim($this->nombre," "); //Quita los espacios al string
                $findme   = '<';
                $findme2   = '>';
                $pos = strpos($usuariotrim, $findme);
                $pos2 = strpos($usuariotrim, $findme2);
                //Condicions
                if(empty($usuariotrim)){
                    $error[]= urlencode('El campo usuario no puede estar vacio');
                }

                if ($pos !== false) {
                    $error[]= 'El campo usuario no puede contener este signo <';
                  }
               
                if ($pos2 !== false) {
                    $error[]= 'El campo usuario no puede contener este signo >';
                 } 
            }
            if(isset($password)){
                 //variables
                $this->password = $password;
                $passwordtrim = trim($this->password," ");
                $findme   = '<';
                $findme2   = '>';
                $pos = strpos($passwordtrim, $findme);
                $pos2 = strpos($passwordtrim, $findme2);
                //conditions
                if(empty($passwordtrim)){
                    $error[]= urlencode('El campo password no puede estar vacio');
                }
                if ($pos !== false) {
                    $error[]= 'El campo password no puede contener este signo <';
                  }
               
                if ($pos2 !== false) {
                    $error[]= 'El campo password no puede contener este signo >';
                 }
            }

            if(isset($email)){
                 //variables
                $this->email=$email;
                $emailtrim = trim($this->email," ");
                $findme   = '<';
                $findme2   = '>';
                $pos = strpos($emailtrim, $findme);
                $pos2 = strpos($emailtrim, $findme2);
                 //conditions
                 if(empty($emailtrim)){
                    $error[]= urlencode('El campo email no puede estar vacio');
                }
                if(is_numeric($emailtrim)){
                    $error[]= 'El campo email no puede ser un numero';
                }
                if ($pos !== false) {
                    $error[]= 'El campo email no puede contener este signo <';
                  }
               
                if ($pos2 !== false) {
                    $error[]= 'El campo email no puede contener este signo >';
                 }
                 if(!preg_match("/^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/", $emailtrim)){
                    $error[]= 'El campo email es incorrecto';
                }
            }
            if(isset($telefono)){
                 //variables
                $this->telefono = $telefono;
                $telefonotrim = trim($this->telefono," ");
                $findme   = '<';
                $findme2   = '>';
                $pos = strpos($telefonotrim, $findme);
                $pos2 = strpos($telefonotrim, $findme2);
                 //conditions
                 if(empty($telefonotrim)){
                    $error[]= urlencode('El campo telefono no puede estar vacio');
                }
                if(!(is_numeric($telefonotrim))){
                    $error[]= 'El campo telefono debe contener numeros';
                }
                if ($pos !== false) {
                    $error[]= 'El campo telefono no puede contener este signo <';
                  }
               
                if ($pos2 !== false) {
                    $error[]= 'El campo telefono no puede contener este signo >';
                 }
            }

            if(empty($error)){
                $this->valida = true;
                return $this->valida;
            }else{
                return $error;
            }
        }

        
      

}
    

?>