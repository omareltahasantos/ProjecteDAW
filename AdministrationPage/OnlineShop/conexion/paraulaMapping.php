<?php


    class paraula extends DataBoundObject {
        protected $id;
        protected $paraula;
        protected $total;
        protected $lastvisit;
      
        
        protected function DefineTableName() {
            return("paraula");
    }
    
        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "paraula" => "paraula",
                        "total" => "total",
                        "lastvisit" => "lastvisit"));
        }
    

      

        }
    

?>