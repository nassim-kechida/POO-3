<?php
// MotorWay.php

require_once "HighWay.php";

final class MotorWay extends HighWay {
    
    public function __construct()
    {
        parent::__construct(4, 130);
    }

    public function addVehicle(object $newVehicle): void
    {
        $testForbidden = 0;
        if ($newVehicle instanceof Bicycle) $testForbidden = 1;
        if ($newVehicle instanceof Skateboard) $testForbidden = 1;
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