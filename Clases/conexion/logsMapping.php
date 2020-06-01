<?php
    class logs extends DataBoundObject{
        protected $id;
        protected $mensaje;
        protected $id_user;
        protected $fecha;
      
        
        protected function DefineTableName() {
            return("logs");
    }
    
        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "id_user" => "id_user",
                        "mensaje" => "mensaje",
                        "fecha" => "fecha"));
        }
    
        public function grabar($id_user,$mensaje){
            date_default_timezone_set("Europe/Madrid");
            $fecha =   date("Y"). "-" .date("m") . "-" .date("d"). " ".date("H:i:s");
          
            $this->id_user = $id_user;
            $this->mensaje=$mensaje;
            $query ="INSERT INTO logs(id_user,mensaje,fecha) VALUES ($this->id_user,'$this->mensaje','$fecha')";
            
            
            if($resultado= $this->insertLog($query)){
              return 'correcto';
            }else{
              return 'incorrecto';
            }
            
          }
    
      

}
    

?>