<?php
require __DIR__ .'/vendor/autoload.php';

use Zivile\Company;
use Zivile\ConstructionCompany;
use Zivile\SoftwareCompany;
use Zivile\Programmer;
use Zivile\Builder;





$programmer = new Programmer();
// $builder = new Builder();

$programmer->printInfo();
// $builder->printInfo();
// $builder->addSkill('Truck Driver');

