<?php

class Car
{
  private int $nbWheels;
  private int $currentSpeed;
  private string $color;
  private int $nbSeats;
  private string $energy;
  private int $energyLevel;

  public function __construct(string $color, int $nbSeats, string $energy)
  {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
  }

  public function start(): string
  {
    $this->currentSpeed = 15;
    return 'Go !!! ';
  }

  public function brake(): string
  {
    $sentence = '';
    while ($this->currentSpeed > 0) {
      $this->currentSpeed--;
      $sentence .= 'Brake !!! ';
    }
    $sentence .= "I'm stopped !";
    return $sentence;
  }

  public function forward(): string
  {
    $sentence = '';
    while ($this->currentSpeed < 30) {
      $this->currentSpeed++;
      $sentence .= 'Forward !!! ';
    }
    $sentence .= "I'm on max !";
    return $sentence;
  }

  public function getNbWheels()
  {
    return $this->nbWheels;
  }

  public function getCurrentSpeed()
  {
    return $this->currentSpeed;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function getNbSeats()
  {
    return $this->nbSeats;
  }

  public function getEnergy()
  {
    return $this->energy;
  }

  public function getEnergyLevel()
  {
    return $this->energyLevel;
  }
}
