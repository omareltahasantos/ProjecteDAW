<?php
    class galeria extends DataBoundObject{
        protected $id;
        protected $filename;
        protected $id_juego;
      
        
        protected function DefineTableName() {
            return("galeria");
    }
    
        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "filename" => "filename",
                        "id_juego" => "id_juego" ));
        }
    

      

}
    

?>