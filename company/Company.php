<?php
namespace Zivile;

class Company {
 protected $name;
 protected $employees;
 protected $turnover;


public function __construct() {
$string = '';
$letters = range('a','z');
for ($i=0; $i < rand(5, 12); $i++) { 
    $string.= $letters[mt_rand(0, 25)];
}
$this->name = $string;
$this->employees = rand(3, 100);
$this->turnover = rand(10000, 10000000);

}

}
