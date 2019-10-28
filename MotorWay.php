<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{

    public function __construct(int $maxSpeed, int $nbLane)
    {
        $this->maxSpeed = $maxSpeed;
        $this->nbLane = $nbLane;
    }

    public function addVehicle($car)
    {

        if ($car instanceof Vehicle) {
            if (in_array($this->nbLane, $car->authorizationLane()) && $car->forward() <= $this->maxSpeed) {
                $this->currentVehicles[] = $car;
                return $this->currentVehicles;
            }
            return "This vehicle is not allowed or this vehicle is driving too fast";
        }
    }

}
