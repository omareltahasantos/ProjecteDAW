<?php   
include('../conexionDB.php');
///CARGARA 4 VIDEOJUEGOS QUE ESTEN EN OFERTA
//echo 'Estoy en cargaOfertas';

    $comienza = $_GET['comienza'];
    $mostrara = $_GET['mostrara'];
    $videogame = new videogames($objPDO);
    $query ="SELECT count(*) as total FROM videogames WHERE precio <= 35 " ;
    $result = $videogame->selectOfertas($query);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $total =  $row['total'];//10
    
    //WHERE precio <= 40 LIMIT $comienza,$mostrara
    //$query ="SELECT * FROM videogames  WHERE precio <=35 LIMIT 8,2" ;
    $query ="SELECT * FROM videogames WHERE precio <= 35 LIMIT $comienza,$mostrara" ;
    $result = $videogame->selectOfertas($query);
    //echo $total;

    if($comienza > $total){
      echo 'No hagas mas';
    }else{
    
      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
  
        
           
        echo '  <div class="col-lg-3 col-md-6 mb-4 text-center" >';
        echo ' <div>';
        echo '<a href="../fichaProducto/index.php?id_juego='. $row['id_juego'].'" class="text-center ">';
        echo '<img class="img-fluid img-ofertas" src="../fichaProducto/images/'.$row['imagen'].'.png" alt="" >';
        echo '</a>';
           echo '<div class="card-body pt-0 pr-0 pl-0">';
            echo '<h4 class="card-title">';
            echo '<a href="../fichaProducto/index.php?id_juego=' . $row['id_juego'].'" class="titlevideogames hvideogames fuente-1"><strong>'.$row['titulo'].'</strong></a></h4>';
  
          echo' <p class="p-0 categoria fuente-1">'.$row['categoria'].' - Juego '.$row['plataforma'].'</p>';
          echo ' <h5 class="price pb-2 fuente-1">$'.$row['precio'].'</h5>';
           echo '<button type="button" class="botonanadir pt-2 pb-2 pl-3 pr-4 fuente-1" id="'.$row['id_juego'].'">ANADIR A LA CESTA<i class="fa fa-cart-plus carro pl-2" style="font-size:24px" ></i></button>';
         echo '  </div>';
         echo '
           <div class="card-footer">
             <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
           </div>
         </div>
       </div>';
        
        
       
    }
  
  //echo $comienza;
 // echo $mostrara;
   }
        
     
?>