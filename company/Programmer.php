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

    public function addSkill($skill){
        if ($this->employees === 0 &&
        $this->turnover === 0 &&
        $this->programingLanguages ===[] &&
        $this->skills ===[] &&
        $this->pname ==='') {
           echo "Company $this->name is bankrupt.";
        } else {
        if (!in_array($skill, $this->skills)) {
            array_push($this->skills, $skill);
            }
        if (!in_array($skill, $this->programingLanguages)) {
            array_push($this->programingLanguages, $skill);
            }     
        }
    }
       
        public function bankrupt(){

            echo "$this->name is bankrupt. $this->employees employees are now unemployed.<br>";
            $this->employees = 0;
            $this->turnover = 0;
            $this->programingLanguages =[];
            $this->skills =[];
            $this->pname ='';
            Programmer::printInfo();
            }
        }
    



