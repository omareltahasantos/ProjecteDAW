<?php
    class trailer extends DataBoundObject{
        protected $id;
        protected $filename;
        protected $id_juego;
      
        
        protected function DefineTableName() {
            return("trailer");
    }
    
        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "filename" => "filename",
                        "id_juego" => "id_juego" ));
        }
    

      

}
    

?>