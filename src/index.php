<?php

require 'src/php/Person.php';
require 'src/php/Worker.php';
require 'src/php/Programmist.php';



$worker = new Worker();
$worker->setAge(21);
$worker->setName('Misha');


echo 'Name - '.$worker->getName() .' and age '.$worker->getAge(); echo '<br>';

$programmist = new Programmist();
$programmist->setAge(30);
$programmist->setName('Misha');
$programmist->setSkill('Middle');

echo 'Name - '.$programmist->getName() .' and age '.$programmist->getAge().' skill - '.$programmist->getSkill();