<?php
    include("class.collection.php");
   include("class.pdofactory.php");
   include("abstract.databoundobject.php");
   include("categoriaMapping.php");
   include("CestaMapping.php");
   include("galeriaMapping.php");
   include("logsMapping.php");
   include("opinionesMapping.php");
    include("pedidoMapping.php");
    include("trailerMapping.php");
    include("userMapping.php");
    include("videogamesMapping.php");
    
    
      $strDSN = "mysql:host=PMYSQL129.dns-servicio.com:3306;dbname=7574902_tienda";
       $objPDO = PDOFactory::GetPDO($strDSN, "omar", "APTItude01**", 
           array());
       $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
    
    
      
      /* 
       $categoria = new categoria($objPDO); 

      $query = $categoria->selectAll();
     
        while ($row = $query -> fetch(PDO :: FETCH_ASSOC)){
           echo $row['nombre'];
        }
        */
        /*
        $colCategory = new Collection();
        $arrayCategoria = ['Shooter','RPG','Rol'];
        $colCategory->addItem(new categoria($objPDO, $arrayCategoria[0]),"shooter");
        $colCategory->addItem(new categoria($objPDO, $arrayCategoria[1]),"rpg");
        $colCategory->addItem(new categoria($objPDO, $arrayCategoria[2]),"rol");
        $shooter = $colCategory->getItem("shooter");
        print $shooter;
        //$categoria = new categoria($objPDO);
*/
?>