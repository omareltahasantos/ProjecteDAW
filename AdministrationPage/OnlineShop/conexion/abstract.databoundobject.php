<?php

abstract class DataBoundObject {

   protected $ID;
   protected $objPDO;
   protected $strTableName;
   protected $arRelationMap;
   protected $blForDeletion;
   protected $blIsLoaded;
   protected $arModifiedRelations;
   protected $arrayColumnas;
   protected $arrayValores;
   protected $arrayWhereColumnas;
   protected $arrayWhereValores;

   abstract protected function DefineTableName();
   abstract protected function DefineRelationMap();

   public function __construct(PDO $objPDO, $id = NULL) {
      $this->strTableName = $this->DefineTableName();
      $this->arRelationMap = $this->DefineRelationMap();
      $this->objPDO = $objPDO;
      $this->blIsLoaded = false;


      if (isset($id)) {
         $this->ID = $id;
      };
      $this->arModifiedRelations = array();
   }

   public function __toString(){
      
      return $this;
   }
   
   public function insertOne(PDO $objPDO, $arrayColumnas, $arrayValores){

      $this->objPDO = $objPDO;
      $this->arrayColumnas = $arrayColumnas;
      $this->arrayValores = $arrayValores;

      $query = "INSERT INTO " .$this->strTableName. " (".$this->arrayColumnas[0].",".$this->arrayColumnas[1].",".$this->arrayColumnas[2].") VALUES (".$this->arrayValores[0].",".$this->arrayValores[1].",".$this->arrayValores[2].")"; //Sirve para insertar valores en los 3 campos de la tabla paraula
      //$result = $objPDO->query($query);
      return $query;
   }

  
   public function update(PDO $objPDO, $arrayColumnas, $arrayValores, $arrayWhereColumnas, $arrayWhereValores){

      $this->objPDO = $objPDO;
      $this->arrayColumnas = $arrayColumnas;
      $this->arrayValores = $arrayValores;
      $this->arrayWhereColumnas = $arrayWhereColumnas;
      $this->arrayWhereValores =$arrayWhereValores;

      $query = 'UPDATE '.$this->strTableName.' SET '.$this->arrayColumnas[0]. ' = '.$this->arrayValores[0].', '.$this->arrayColumnas[1].' = '.$this->arrayValores[1]. ' WHERE '.$this->arrayWhereColumnas[0]. ' LIKE ' .$this->arrayWhereValores[0];
      //$result = $objPDO->query($query);
      return $query;
   }

   public function selectWord(PDO $objPDO, $arrayColumnas, $arrayWhereColumnas, $arrayWhereValores){

      $this->objPDO = $objPDO;
      $this->arrayColumnas = $arrayColumnas;
      $this->arrayWhereColumnas = $arrayWhereColumnas;
      $this->arrayWhereValores =$arrayWhereValores;

      $query = 'SELECT '.$this->arrayColumnas[0].' FROM '.$this->strTableName.' WHERE '.$arrayWhereColumnas[0].' LIKE '.$this->arrayWhereValores[0]. ' ORDER BY total DESC LIMIT 5';
      //$result = $objPDO->query($query);
      return $query;
   }

   public function selectAll(PDO $objPDO, $arrayColumnas, $arrayWhereColumnas, $arrayWhereValores){

      $this->objPDO = $objPDO;
      $this->arrayColumnas = $arrayColumnas;
      $this->arrayWhereColumnas = $arrayWhereColumnas;
      $this->arrayWhereValores =$arrayWhereValores;

      $query = 'SELECT '.$this->arrayColumnas[0].' FROM '.$this->strTableName.' WHERE '.$arrayWhereColumnas[0].' LIKE '.$this->arrayWhereValores[0]. ' ORDER BY total DESC LIMIT 5';
      //$result = $objPDO->query($query);
      return $query;
   }





   public function Load() {
      if (isset($this->ID)) {
		$strQuery = "SELECT ";
        foreach ($this->arRelationMap as $key => $value) {
			$strQuery .= "\"" . $key . "\",";
        }
        $strQuery = substr($strQuery, 0, strlen($strQuery)-1);
        $strQuery .= " FROM " . $this->strTableName . " WHERE \"id\" = :eid";
        $objStatement = $this->objPDO->prepare($strQuery);
        $objStatement->bindParam(':eid', $this->ID, PDO::PARAM_INT);
        $objStatement->execute();
        $arRow = $objStatement->fetch(PDO::FETCH_ASSOC);
        foreach($arRow as $key => $value) {
            $strMember = $this->arRelationMap[$key];
            if (property_exists($this, $strMember)) {
                if (is_numeric($value)) {
                   eval('$this->'.$strMember.' = '.$value.';');
                } else {
                   eval('$this->'.$strMember.' = "'.$value.'";');
                };
            };
         };
         $this->blIsLoaded = true;
      };
   }

   public function Save() {
      if (isset($this->ID)) {
         $strQuery = 'UPDATE "' . $this->strTableName . '" SET ';
         foreach ($this->arRelationMap as $key => $value) {
            eval('$actualVal = &$this->' . $value . ';');
            if (array_key_exists($value, $this->arModifiedRelations)) {
               $strQuery .= '"' . $key . "\" = :$value, ";
            };
         }
         $strQuery = substr($strQuery, 0, strlen($strQuery)-2);
         $strQuery .= " WHERE \"id\" = :eid";
         unset($objStatement);
         $objStatement = $this->objPDO->prepare($strQuery);
         $objStatement->bindValue(':eid', $this->ID, PDO::PARAM_INT);
         foreach ($this->arRelationMap as $key => $value) {
            eval('$actualVal = &$this->' . $value . ';');
            if (array_key_exists($value, $this->arModifiedRelations)) {
               if ((is_int($actualVal)) || ($actualVal == NULL)) {
                  $objStatement->bindValue(':' . $value, $actualVal,PDO::PARAM_INT);
               } else {
                  $objStatement->bindValue(':' . $value, $actualVal,PDO::PARAM_STR);
               };
            };
         };
         $objStatement->execute();
      } else {
         $strValueList = "";
         $strQuery = 'INSERT INTO ' . $this->strTableName . '(';
         foreach ($this->arRelationMap as $key => $value) {
            eval('$actualVal = &$this->' . $value . ';');
            if (isset($actualVal)) {
               if (array_key_exists($value, $this->arModifiedRelations)) {
                  $strQuery .= '"' . $key . '", ';
                  $strValueList .= ":$value, ";
               };
            };
         }
         $strQuery = substr($strQuery, 0, strlen($strQuery) - 2);
         $strValueList = substr($strValueList, 0, strlen($strValueList) - 2);
         $strQuery .= ") VALUES (";
         $strQuery .= $strValueList;
         $strQuery .= ")";
         //$ids = $this->getID();
         unset($objStatement);
         $objStatement = $this->objPDO->prepare($strQuery);
         foreach ($this->arRelationMap as $key => $value) {
            eval('$actualVal = &$this->' . $value . ';');
            if (isset($actualVal)) {   
               if (array_key_exists($value, $this->arModifiedRelations)) {
                  if ((is_int($actualVal)) || ($actualVal == NULL)) {
                     $objStatement->bindValue(':' . $value, $actualVal, PDO::PARAM_INT);
                  } else {
                     $objStatement->bindValue(':' . $value, $actualVal, PDO::PARAM_STR);
                  };
               };
            };
         }
         $objStatement->execute();
        $this->ID = $this->objPDO->lastInsertId();
      }
   }

   public function MarkForDeletion() {
      $this->blForDeletion = true;
   }
   
   public function __destruct() {
      if (isset($this->ID)) {   
         if ($this->blForDeletion == true) {
            $strQuery = 'DELETE FROM "' . $this->strTableName . '" WHERE "id" = :eid';
            $objStatement = $this->objPDO->prepare($strQuery);
            $objStatement->bindValue(':eid', $this->ID, PDO::PARAM_INT);   
            $objStatement->execute();
         };
      }
   }

   public function __call($strFunction, $arArguments) {

      $strMethodType = substr($strFunction, 0, 3);
      $strMethodMember = substr($strFunction, 3);
      switch ($strMethodType) {
         case "set":
            return($this->SetAccessor($strMethodMember, $arArguments[0]));
            break;
         case "get":
            return($this->GetAccessor($strMethodMember));   
      };
      return(false);   
   }

   private function SetAccessor($strMember, $strNewValue) {
      if (property_exists($this, $strMember)) {
         if (is_numeric($strNewValue)) { 
            eval('$this->' . $strMember . ' = ' . $strNewValue . ';');
         } else {
            eval('$this->' . $strMember . ' = "' . $strNewValue . '";');
         };
         $this->arModifiedRelations[$strMember] = "1";
         return($this);
      } else {
         return(false);
      };   
   }

   private function GetAccessor($strMember) {
      if ($this->blIsLoaded != true) {
         $this->Load();
      }
      if (property_exists($this, $strMember)) {
         eval('$strRetVal = $this->' . $strMember . ';');
         return($strRetVal);
      } else {
         return(false);
      };   
   }
   
}

?>
