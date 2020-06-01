<?php
    class categoria extends DataBoundObject{
        protected $id;
        protected $_nombre;
      
        
        protected function DefineTableName() {
            return("categoria");
    }
    
        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "nombre" => "nombre"));
        }
    /*
      protected function __construct($nombre) {
        $this->nombre=$nombre;
      }
      
    */
   

}
    

?>