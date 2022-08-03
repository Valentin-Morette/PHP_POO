<?php

require 'Car.php';
require 'Bicycle.php';
require 'Truck.php';
require 'MotorWay.php';
require 'PedestrianWay.php';
require 'ResidentialWay.php';
$motor = new MotorWay();
$pedestrian = new PedestrianWay();
$resident = new ResidentialWay();
$bicycle = new Bicycle('blue', 1);
$car = new Car('green', 4, 'electric');
$truck = new Truck('black', 3, 'fuel', 5000);

$resident->addVehicle($bicycle);
$resident->addVehicle($truck);
$motor->addVehicle($bicycle);
$motor->addVehicle($car);

var_dump($motor);
var_dump($pedestrian);
var_dump($resident);

try {
  echo $car->forward();
} catch (Exception $e) {
  $car->setParkBrake();
  echo 'frein à main retiré';
} finally {
  echo 'Ma voiture roule comme un donut';
}

var_dump(Truck::ALLOWED_ENERGIES);

echo $bicycle->forward();
var_dump($bicycle);

echo $car->forward();
var_dump($car);

echo $truck->forward();
var_dump($truck);

echo $truck->lookFull() . '</br>';
$truck->setStorage(5000);
echo $truck->lookFull() . '</br>' . '</br>';
echo $truck->getCurrentSpeed() . '</br>';
echo $truck->brake() . '</br>';
echo $truck->getCurrentSpeed();
