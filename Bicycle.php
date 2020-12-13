<?php
// Bicycle.php

require_once "Vehicle.php";

final class Bicycle extends Vehicle {

    public function __construct(int $nbSeats, int $nbWheels, string $color)
    {
        parent::__construct($nbSeats,$nbWheels, $color);
    }
}
