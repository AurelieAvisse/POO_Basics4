<?php

require_once 'HighWay.php';

final class ResidentialWay
{
    public function __construct(int $maxSpeed, int $nbLane)
    {
        $this->maxSpeed = $maxSpeed;
        $this->nbLane = $nbLane;
    }

    public function addVehicle($truck)
    {

        if ($truck instanceof Vehicle) {
            if (in_array($this->nbLane, $truck->authorizationLane()) && $truck->forward() <= $this->maxSpeed) {
                $this->currentVehicles[] = $truck;
                return $this->currentVehicles;
            }
            return "This vehicle is not allowed or this vehicle is driving too fast";
        }
    }
}
