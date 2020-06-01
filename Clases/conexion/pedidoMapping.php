<?php
    class pedido extends DataBoundObject{
        protected $id;
        protected $nombre;
        protected $id_user;
        protected $fecha;
        protected $clave;
        protected $estado;

        protected function DefineTableName() {
            return("pedido");
    }
    
        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "nombre" => "nombre",
                        "id_user" => "id_user",
                        "clave" => "clave",
                        "fecha" => "fecha",
                        "estado" => "estado"));
        }
    

      public function visualizar($id_user){
        $this->id_user = $id_user;
        $consulta = "SELECT * FROM pedido WHERE id_user = '" .$this->id_user."'";
         $resultado= $this->selectPedidos($consulta);
        
         while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<th>".$row["id_pedido"]."</th>";
            echo "<td>".$row["fecha"]."</td>";
            echo "<td>".$row["clave"]."</td>";
            echo "<td style='color:green;'>".$row["estado"]."</td>";
            echo "</tr>";
         }
      }
      public function crearPedido($id_user, $clave){
        date_default_timezone_set("Europe/Madrid");
        $fecha =   date("Y"). "-" .date("m") . "-" .date("d"). " ".date("H:i:s");
      
        $this->id_user = $id_user;
        $this->clave = $clave;
        $query ="INSERT INTO pedido(id_user,fecha,clave,estado) VALUES ($this->id_user,'$fecha','$this->clave','Enviado')";
        
        
        if($resultado= $this->insertPedido($query)){
          return 'correcto';
        }else{
          return 'incorrecto';
        }
        
      }
      public function changeRol($id_user){
        $this->id_user = $id_user;
      
        $consulta="UPDATE user SET rol ='cliente' WHERE id_user = '".$_SESSION['id_user']."'" ;
        
        
        if($resultado= $this->updateRol($consulta)){
          return 'correcto';
        }else{
          return 'incorrecto';
        }
        
      }

}
    

?>