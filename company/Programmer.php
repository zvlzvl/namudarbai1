<?php

namespace Zivile;

class Programmer extends SoftwareCompany {

    public $pname;
    public $skills;


    public function __construct() {
        parent::__construct();
        $pname = '';
        $letters = range('a','z');
        $pname[0]= strtoupper($letters[mt_rand(0, 25)]);
        for ($i=1 ; $i < rand(5, 12); $i++) {   
            $pname.= $letters[mt_rand(0, 25)];
            }
        $this->pname = $pname;

        $skills =[];
       while (count($skills) < 2) { 
           $randLanguage = $this->programingLanguages[rand(0, 2)];
           if(!in_array($randLanguage, $skills)) {
               array_push($skills, $randLanguage);
           }   
       }   
       $this->skills = $skills;
   } 
   public function printInfo() {
    echo "Company name: $this->name <br> Employees: $this->employees <br> Turnover: $this->turnover <br> Company programming languages: ".implode(', ', $this->programingLanguages)." <br> Programmer name: $this->pname <br> Skills: ".implode(', ', $this->skills);
}

    }
