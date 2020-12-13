<?php
// Skateboard.php

require_once "Vehicle.php";

final class Skateboard extends Vehicle {

    public function __construct(int $nbSeats, int $nbWheels, string $color)
    {
        parent::__construct($nbSeats,$nbWheels, $color);
    }
}