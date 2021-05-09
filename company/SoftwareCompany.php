<?php
namespace Zivile;

class SoftwareCompany extends Company {
 protected $programingLanguages;


 public function __construct(){
      parent::__construct();
     $programingLanguages =[];
     $AllLanguages = ['PHP', 'Pascal', 'Go', 'C++', 'JAVA', 'Phyton'];
    while (count($programingLanguages) < 3) { 
        $randLanguage = $AllLanguages[rand(0, 5)];
        if(!in_array($randLanguage, $programingLanguages)) {
            array_push($programingLanguages, $randLanguage);
        }   
    }   
    $this->programingLanguages =  $programingLanguages;
} 



}
