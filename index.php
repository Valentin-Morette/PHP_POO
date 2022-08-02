<?php

require 'Car.php';
require 'Bicycle.php';
require 'Truck.php';

var_dump(Truck::ALLOWED_ENERGIES);

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck('black', 3, 'fuel', 5000);
echo $truck->forward();
var_dump($truck);

echo $truck->lookFull() . '</br>';
$truck->setStorage(5000);
echo $truck->lookFull() . '</br>' . '</br>';
echo $truck->getCurrentSpeed() . '</br>';
echo $truck->brake() . '</br>';
echo $truck->getCurrentSpeed();
