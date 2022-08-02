<?php

require 'Car.php';
require 'Bicycle.php';
$karl = new Car('red', 4, 'essence');
$bike = new Bicycle('blue');
var_dump($bike);
echo $bike->forward();
echo '<br>';
echo $bike->brake();
echo '<br>';
echo '--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>';

var_dump($karl);
echo $karl->start();
echo '<br>';
echo $karl->forward();
var_dump($karl->getCurrentSpeed());
echo $karl->brake();
var_dump($karl->getCurrentSpeed());
