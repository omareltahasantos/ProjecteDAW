<?php   
include('../conexionDB.php');
$plataforma = $_GET['categoria'];

$videogame = new videogames($objPDO);
$query ="SELECT plataforma FROM videogames WHERE plataforma = '".$plataforma."'" ;

$result = $videogame->selectPlatformJuego($query);


while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

  $platformbd = $row['plataforma'];
 
 

 }
 echo '
 <div class="row pb-4">
       <ol class="breadcrumb pl-5 pt-4" style="background-color:white;" id="platform">
         <li class="breadcrumb-item itembreadcrumb"><a href="../homePage/index.php">Home</a></li>
         <li class="breadcrumb-item itembreadcrumb"><a class="isDisabled">'.$platformbd.'</a></li>
       </ol>              
     </div>
     <div class="row pb-3 ">
       <div class="col-lg-1 offset-lg-1 mr-3">
         <button type="button" class="btn btn-secondary fuente-1 " id="cat">'.$platformbd.'</button>
       </div>
       <div class="col-lg-8 pr-0">
         <hr width="90%" />
       </div>
     
     </div>';

  
    
  //   }
    
?>