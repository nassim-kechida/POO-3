<?php
// Car.php

require_once "Vehicle.php";

final class Car extends Vehicle {

	protected $motor;

	protected $levelEnergy;

	public function __construct(int $nbSeats, int $nbWheels, string $color, string $motor = 'essence')
    {
		parent::__construct($nbSeats,$nbWheels, $color);
		$this->motor = $motor;
		$this->levelEnergy = 0;
    }

}