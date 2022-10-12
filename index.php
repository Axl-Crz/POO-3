<?php
require './src/Car.php';
require './src/Bicycle.php';
require './src/Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck('Blue', 2, 'fuel', 50);
echo $truck->loading();

$truck = new Truck('green', 3, 'fuel', 50);
$truck->setLoad(28);
$truck->setCurrentSpeed(90);

var_dump($truck);
echo $truck->loading() . '<br>';

echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();