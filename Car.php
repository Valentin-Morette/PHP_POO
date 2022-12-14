<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
  public const ALLOWED_ENERGIES = ['fuel', 'electric'];

  private string $energy;

  private int $energyLevel;

  private bool $hasParkBrake = true;

  public function __construct(string $color, int $nbSeats, string $energy)
  {
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
  }

  public function getEnergy(): string
  {
    return $this->energy;
  }

  public function setEnergy(string $energy): void
  {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
      $this->energy = $energy;
    }
  }

  public function getEnergyLevel(): int
  {
    return $this->energyLevel;
  }

  public function setEnergyLevel(int $energyLevel): void
  {
    $this->energyLevel = $energyLevel;
  }

  public function forward(): string
  {
    if ($this->hasParkBrake) {
      throw new Exception('Park Brake is on');
    }
    $this->currentSpeed = 15;
    return 'Go !';
  }

  public function setParkBrake()
  {
    $this->hasParkBrake = !$this->hasParkBrake;
  }

  public function switchOn()
  {
    return true;
  }

  public function switchOff()
  {
    return false;
  }
}
