<?php
// ResidentialWay.php

require_once "HighWay.php";

final class ResidentialWay extends HighWay {
    public function __construct()
    {
        parent::__construct(2, 50);
    }

    public function addVehicle(object $newVehicle): void
    {
        $testForbidden = 0;
        //if ($newVehicle instanceof AirPlane) $testForbidden = 1;
        if (0 == $testForbidden){
            $this->currentVehicles[] = $newVehicle;
            echo "on a ajouté un vehicule<br>";
        }
        else echo "ce type de véhicule n'est pas autorisé sur cette voie<br>";
    }

    public function removeVehicle(object $Vehicle):void
    {
        unset($this->currentVehicles[array_search($Vehicle, $this->currentVehicles)]);
    }
}