<?php

abstract class HighWay
{
  protected array $currentVehicles;
  protected int $nbLane;
  protected int $maxSpeed;

  public function getCurrentVehicles()
  {
    return $this->currentVehicles;
  }

  public function setCurrentVehicles(array $currentVehicles): void
  {
    $this->currentVehicles = $currentVehicles;
  }

  public function getNbLane()
  {
    return $this->nbLane;
  }

  public function setNbLane(int $nbLane): void
  {
    $this->nbLane = $nbLane;
  }

  public function getMaxSpeed()
  {
    return $this->maxSpeed;
  }

  public function setMaxSpeed(int $maxSpeed): void
  {
    $this->maxSpeed = $maxSpeed;
  }

  abstract public function addVehicle(Vehicle $vehicle);
}
