<?php

namespace Zivile;

class Builder extends ConstructionCompany {
    public $bname;
    public $skills;

    public function __construct() {
        parent::__construct();
        $bname = '';
        $letters = range('a','z');
        $bname[0]= strtoupper($letters[mt_rand(0, 25)]);
        for ($i=1 ; $i < rand(5, 12); $i++) {   
            $bname.= $letters[mt_rand(0, 25)];
            }
        $this->bname = $bname;

        $skills = [];
        $AllSkills = ['electrician', 'plumber', 'tractor', 'driver', 'engineer'];
        array_push($skills, $AllSkills[rand(0, 4)]);    
         
       $this->skills = $skills;
    }

    public function printInfo() {
        echo "Company name: $this->name <br> Employees: $this->employees <br> Turnover: $this->turnover <br> Company building objects: ".implode(', ', $this->buildingObjects)." <br> Builder name: $this->bname <br> Skills: ".implode(', ', $this->skills);
    }
    public function addSkill($skill){
        if ($this->employees === 0 &&
        $this->turnover === 0 &&
        $this->buildingObjects ===[] &&
        $this->skills ===[] &&
        $this->bname ==='') {
           echo "Company $this->name is bankrupt.";
        } 
        else {
            foreach($this->skills as $value){
                if ($value !== $skill){
                array_push($this->skills, $skill);
                }
            }
        }
    }

    public function bankrupt(){
        echo "$this->name is bankrupt. $this->employees employees are now unemployed.<br>";
        $this->employees = 0;
        $this->turnover = 0;
        $this->buildingObjects =[];
        $this->skills =[];
        $this->bname ='';
        self::printInfo();
    }

}