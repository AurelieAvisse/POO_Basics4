<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{

    public function switchOn()
    {
        if ($this->currentSpeed > 10) {
            return true;
        }
        return "You have to drive more than 10km/h to light the lights";
    }

    public function switchOff()
    {
        return false;
    }

    public function authorizationLane()
    {
        $highWayBicycle = 1;
        return $highWayBicycle;
    }

    public function forward()
    {
        return $this->currentSpeed = 13;
        return "Go !";
    }
}
