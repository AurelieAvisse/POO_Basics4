<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bike = new Bicycle('Red', 1);

echo "Color: " . $bike->getColor() . '<br />';
echo "Number of seats: " . $bike->getNbSeats() . '<br />';

echo $bike->forward();
echo '<br /> Bike speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br />';

echo $bike->brake();
echo '<br /> Bike speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br />';

echo $bike->brake();

echo '<br />--------------------------<br />';

$skateboard = new Skateboard('Pink', 1);

echo "Color: " . $skateboard->getColor() . '<br />';
echo "Number of seats: " . $skateboard->getNbSeats() . '<br />';

echo $skateboard->forward();
echo '<br /> skateboard speed : ' . $skateboard->getCurrentSpeed() . ' km/h' . '<br />';

echo $skateboard->brake();
echo '<br /> skateboard speed : ' . $skateboard->getCurrentSpeed() . ' km/h' . '<br />';

echo $skateboard->brake();

echo '<br />--------------------------<br />';

$car = new Car('Blue', 5, 'electric');

echo "Color: " . $car->getColor() . '<br />';
echo "Number of seats: " . $car->getNbSeats() . '<br />';
echo 'Energy of the car : ' . $car->getEnergy() . '<br>';

echo $car->forward();
echo '<br /> Speed of the car : ' . $car->getCurrentSpeed() . ' km/h' . '<br />';
echo $car->brake();
echo '<br /> Speed of the car : ' . $car->getCurrentSpeed() . ' km/h' . '<br />';

echo $car->brake();

echo '<br />--------------------------<br />';

$truck = new Truck('Green', 4, 'fuel', 20);

echo "Color: " . $truck->getColor() . '<br />';
echo "Number of seats: " . $truck->getNbSeats() . '<br />';
echo 'Energy of the truck : ' . $truck->getEnergy() . '<br>';
echo 'Truck loading : ' . $truck->full() . '<br>';

echo $truck->forward();
echo '<br /> Speed of the truck : ' . $truck->getCurrentSpeed() . ' km/h' . '<br />';
echo $truck->brake();
echo '<br /> Speed of the truck : ' . $truck->getCurrentSpeed() . ' km/h' . '<br />';

echo $truck->brake();

echo '<br />--------------------------<br />';

echo "Autoroute 4 voies - Vitesse maximum 130km/h";
$motorWay = new MotorWay(130, 4);
var_dump($motorWay->addVehicle($car));

echo '<br />--------------------------<br />';

echo "Route résidentielle 2 voies - Vitesse maximum 50km/h";
$residentialWay = new ResidentialWay(50, 2);
var_dump($residentialWay->addVehicle($truck));

echo '<br />--------------------------<br />';

echo "Voie piétonne 1 voies - Vitesse maximum 10km/h";
$pedestrianWay = new PedestrianWay(10, 1);
var_dump($pedestrianWay->addVehicle($bike));

echo '<br />--------------------------<br />';

var_dump($car->switchOn());
var_dump($car->switchOff());

var_dump($bike->switchOn());
var_dump($bike->switchOff());
