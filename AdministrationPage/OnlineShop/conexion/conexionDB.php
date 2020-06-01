<?php
    require("class.pdofactory.php");
    require("abstract.databoundobject.php");
    require("paraulaMapping.php");

    
    $strDSN = "mysql:host=localhost;dbname=tienda";
       $objPDO = PDOFactory::GetPDO($strDSN, "omar", "APTItude01", 
           array());
       $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       


?>