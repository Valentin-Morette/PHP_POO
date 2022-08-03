<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
  protected int $nbLane = 4;
  protected int $maxSpeed = 130;

  public function addVehicle(Vehicle $vehicle): void
  {
    if ($vehicle instanceof Car || $vehicle instanceof Truck) {
      $this->currentVehicles[] = $vehicle;
    }
  }
}
