<?php
// Truck.php

require_once "Vehicle.php";

final class Truck extends Vehicle {
    
    protected $motor;

	protected $levelEnergy;

	public function __construct(int $nbSeats, int $nbWheels, string $color, string $motor = 'diesel')
    {
		parent::__construct($nbSeats,$nbWheels, $color);
		$this->motor = $motor;
		$this->levelEnergy = 0;
    }
}
