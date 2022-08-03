<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
  protected int $nbLane = 1;
  protected int $maxSpeed = 10;

  public function addVehicle(Vehicle $vehicle): void
  {
    if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
      $this->currentVehicles[] = $vehicle;
    }
  }
}
