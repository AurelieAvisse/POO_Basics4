<?php

require_once 'HighWay.php';

final class PedestrianWay
{
    public function __construct(int $maxSpeed, int $nbLane)
    {
        $this->maxSpeed = $maxSpeed;
        $this->nbLane = $nbLane;
    }

    public function addVehicle($bike)
    {

        if ($bike instanceof Vehicle) {
            if ($bike->authorizationLane() == $this->nbLane && $bike->forward() <= $this->maxSpeed) {
                $this->currentVehicles[] = $bike;
                return $this->currentVehicles;
            }
            return "This vehicle is not allowed or this vehicle is driving too fast";
        }
    }
}
