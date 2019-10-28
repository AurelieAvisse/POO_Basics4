<?php

require_once 'Vehicle.php';

class Skateboard extends Vehicle
{

    public function authorizationLane()
    {
        $highWaySkate = 1;
        return $highWaySkate;
    }

    public function forward()
    {
        return $this->currentSpeed = 3;
        return "Go !";
    }

}
