<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    protected const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    protected $energy;

    /**
     * @var int
     */
    protected $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function switchOn()
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function authorizationLane()
    {
        $highWayCar = [4, 2];
        return $highWayCar;
    }

    public function forward()
    {
        return $this->currentSpeed = 132;
        return "Go !";
    }

    //Autoriser les valeurs NULL en tant que valeurs de retour
    /**
     * @return string|null
     */
    public function getEnergy(): ?string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     * @return void
     */
    public function setEnergy(string $energy): void
    {
        //Vérifie si l'énergie passée en paramètre est bien dans le tableau de la constante ALLOWED_ENERGIES
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        } else {
            echo "The energy '" . $energy . "' for this car does not exist!<br />";
        }
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     * @return void
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
