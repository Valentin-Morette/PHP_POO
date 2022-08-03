<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Truck extends Vehicle implements LightableInterface
{
  public const ALLOWED_ENERGIES = ['fuel', 'electric'];

  private string $energy;

  private int $energyLevel;

  private int $capacityStorage;

  private int $storage = 0;

  public function __construct(
    string $color,
    int $nbSeats,
    string $energy,
    int $capacityStorage
  ) {
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
    $this->capacityStorage = $capacityStorage;
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

  public function getCapacityStorage(): int
  {
    return $this->capacityStorage;
  }

  public function setCapacityStorage(int $capacityStorage): void
  {
    $this->capacityStorage = $capacityStorage;
  }

  public function getStorage(): int
  {
    return $this->storage;
  }

  public function setStorage(int $storage): void
  {
    $this->storage = $storage;
  }

  public function lookFull(): string
  {
    if ($this->storage === $this->capacityStorage) {
      return 'full';
    } else {
      return 'in filling';
    }
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
