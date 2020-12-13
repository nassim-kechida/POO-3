<?php
// HighWay.php

abstract class HighWay
{
    protected $currentVehicles;

    protected $nbLane;
    
    protected $maxSpeed;

    public function __construct(int $nbLane,int $maxSpeed)
    {
        $this->currentVehicles = [];
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles():array
    {
        return $this->currentVehicles;
    }

    public function getMaxSpeed():int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed (int $newMaxSpeed):void
    {
        $this->maxSpeed = $newMaxSpeed;
    }

    public function getNbLane():int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $newNbLane):void
    {
        $this->nbLane = $newNbLane;
    }


    abstract public function addVehicle (object $newVehicle);
}