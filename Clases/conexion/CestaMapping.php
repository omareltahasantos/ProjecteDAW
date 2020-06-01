<?php
    class cesta extends DataBoundObject{
        protected $id;
        protected $id_user;
        protected $id_juego;
      
        
        protected function DefineTableName() {
            return("cesta");
    }
    
        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "id_user" => "id_user",
                        "id_juego" => "id_juego" ));
        }
        
        public function noRepetible($id_user,$id_juego){
            $this->id_user = $id_user;
            $this->id_juego = $id_juego;
            $consulta = "SELECT * FROM cesta WHERE id_user = '" .$this->id_user."' AND id_juego = '" .$this->id_juego."' ";
            $resultado= $this->selectItems($consulta);
            return $resultado;
            
           
        }
        public function addItem($id_user,$id_juego){
            $this->id_user = $id_user;
            $this->id_juego = $id_juego;
            $consulta="INSERT cesta (id_user,id_juego) VALUES ( $this->id_user,$this->id_juego)";

           
            
             if($resultado= $this->insertItem($consulta)){
                 echo 'bien';
             }
        }
        public function removeItem($id_user,$id_juego){
            $this->id_user = $id_user;
            $this->id_juego = $id_juego;
            $consulta= "DELETE FROM cesta WHERE id_juego = '". $this->id_juego."' AND id_user = '". $this->id_user."'" ;

             if($resultado= $this->deleteItem($consulta)){
                 echo 'bien';
             }
        }
        public function totalItems($id_user){
            $this->id_user = $id_user;
            $consulta = "SELECT COUNT(id_juego) as total FROM cesta WHERE id_user = '" .$this->id_user."'";
            $resultado= $this->selectItems($consulta);
            return $resultado;
        }

        public function totalPrice($id_user){
            $this->id_user = $id_user;
            $consulta = "SELECT SUM(precio) as total FROM videogames v, cesta c WHERE c.id_juego = v.id_juego and c.id_user = '" .$this->id_user."'";
            $resultado= $this->selectPrice($consulta);
            return $resultado;
        }
		
      public function deleteCesta($id_user){
            $this->id_user = $id_user;
           
            $consulta= "DELETE FROM cesta WHERE id_user = '".$this->id_user."'" ;
				
             if($resultado= $this->deleteItem($consulta)){
                 echo 'bien';
             }
			 
		 
		  
        }
    

      

}
    

?>