<?php
    class videogames extends DataBoundObject{
        protected $id;
        protected $titulo;
        protected $categoria;
        protected $plataforma;
        protected $precio;
        protected $stock;
        protected $estado;
        protected $imagen;
      
        
        protected function DefineTableName() {
            return("videogames");
    }
    
        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "titulo" => "titulo",
                        "categoria" => "categoria",
                        "plataforma" => "plataforma",
                        "precio" => "precio",
                        "stock" => "stock",
                        "estado" => "estado",
                        "imagen" => "imagen"));
        }
    

      

}
    

?>