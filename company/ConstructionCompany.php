<?php
namespace Zivile;

class ConstructionCompany extends Company {
    protected $buildingObjects;


    public function __construct(){
        parent::__construct();
        $buildingObjects =[];
        $AllObjects = ['Houses', 'Bridges', 'Offices', 'Roads', 'Gardens', 'Railroads', 'Canals', 'Aqueduct', 'Stadions'];
       while (count($buildingObjects) < 4) { 
           $randObject = $AllObjects[rand(0, 8)];
           if(!in_array($randObject, $buildingObjects)) {
               array_push($buildingObjects, $randObject);
           }   
       }   
       $this->buildingObjects =  $buildingObjects;
   } 

   
   
   
   }