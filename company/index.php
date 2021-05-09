<?php

require __DIR__ .'/vendor/autoload.php';

use Zivile\Company;
use Zivile\ConstructionCompany;
use Zivile\SoftwareCompany;
use Zivile\Programmer;
use Zivile\Builder;





$programmer = new Programmer();
$builder = new Builder();

echo '-------programer print info----------<br>';
$programmer->printInfo();
echo '<br>-------programer add skills----------<br>';
$programmer->addSkill('Rusty');
$programmer->addSkill('PHP');
$programmer->addSkill('Pascal');
$programmer->addSkill('Go');
$programmer->addSkill('JAVA');
$programmer->addSkill('Phyton');

echo '<br>-------programer print info 2----------<br>';
$programmer->printInfo();

echo '<br>-------programer bankrupt----------<br>';
$programmer->bankrupt();

echo '<br>-------programer add skills after bankrupt----------<br>';
$programmer->addSkill('PHP');
echo '<br>-------programer print info 3----------<br>';
$programmer->printInfo();


echo '<br>----<br>';
echo '-------builder print info----------<br>';
$builder->printInfo();

echo '<br>-------builder add skills----------<br>';
$builder->addSkill('Truck Driver');

echo '<br>-------builder print info 2----------<br>';
$builder->printInfo();

echo '<br>-------builder bankrupt----------<br>';
$builder->bankrupt();

echo '<br>-------builder add skills after bankrupt----------<br>';
$builder->addSkill('Tank Driver');
echo '<br>-------builder print info 3----------<br>';
$builder->printInfo();
