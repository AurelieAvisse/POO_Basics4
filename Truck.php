<?php

require_once 'Car.php';

class Truck extends Car
{

    /**
     * @var int
     */
    private $storage;

    /**
     * @var int
     */
    private $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, string $storage)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->storage = $storage;
    }

    public function authorizationLane()
    {
        $highWayTruck = [4, 2];
        return $highWayTruck;
    }

    public function forward()
    {
        return $this->currentSpeed = 49;
        return "Go !";
    }

    public function full()
    {
        $this->loading = 18;

        switch ($this->storage) {
            case ($this->loading < 0):
                return "Valeur incorrecte";
                break;
            case ($this->loading > $this->storage):
                return "Valeur incorrecte";
                break;
            case ($this->loading < 0):
                return "Valeur incorrecte";
                break;
            case ($this->loading < $this->storage):
                return "In filling";
                break;
            case ($this->loading == $this->storage):
                return "Full";
                break;
            default:
                return "";
        }
    }

    /**
     * @return int
     */
    public function getStorage(): int
    {
        return $this->storage;
    }

    /**
     * @param int $storage
     * @return void
     */
    public function setStorage(int $storage): void
    {
        $this->storage = $storage;
    }

    /**
     * @return int
     */
    public function getLoading(): int
    {
        return $this->loading;
    }

    /**
     * @param int $loading
     * @return void
     */
    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function setEnergy(string $energy): void
    {
        //Vérifie si l'énergie passée en paramètre est bien dans le tableau de la constante ALLOWED_ENERGIES
        if (in_array($energy, parent::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        } else {
            echo "The energy '" . $energy . "' for this truck does not exist!<br />";
        }
    }

}
