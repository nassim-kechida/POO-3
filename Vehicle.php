<?php
// Vehicle.php

abstract class Vehicle {
	
	protected $speed;

	protected $nbrSeat;

	protected $nbrWheel;

	protected $color;

	public function __construct(int $nbrSeat, int $nbrWheel, string $color)
	{
		$this->nbrSeat = $nbrSeat;
		$this->nbrWheel = $nbrWheel;
		$this->color = $color;
		$this->speed = 0;
	}

}
