<?php
    class opinion extends DataBoundObject{
        protected $id;
        protected $mensaje;
        protected $id_user;
        protected $id_juego;
        protected $fecha;
      
        
        protected function DefineTableName() {
            return("opiniones");
    }
    
        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "mensaje" => "mensaje",
                        "id_user" => "id_user",
                        "id_juego" => "id_juego",
                        "fecha" => "fecha"));
        }
    

      

}
    

?>