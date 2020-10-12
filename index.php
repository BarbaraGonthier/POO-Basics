<?php

require_once 'Bicycle.php';
$bike = new Bicycle('blue');
var_dump($bike);


$bike->setCurrentSpeed = 0;
var_dump($bike);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle('yellow');


$tornado = new Bicycle('black');

$tornado->forward();

$basicCar = new Car ('red', 2, 10);

var_dump($basicCar);
