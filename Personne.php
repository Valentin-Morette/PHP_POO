<?php

class Personne
{
  private string $name;
  private string $firstname;
  private string $address;
  private string $birthdate;

  public function __construct(
    string $name,
    string $firstname,
    string $address,
    string $birthdate
  ) {
    $this->name = $name;
    $this->firstname = $firstname;
    $this->address = $address;
    $this->birthdate = $birthdate;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getFirstname(): string
  {
    return $this->firstname;
  }

  public function getAddress(): string
  {
    return $this->address;
  }

  public function getBirthdate(): string
  {
    return $this->birthdate;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function setFirstname(string $firstname): void
  {
    $this->firstname = $firstname;
  }

  public function setAddress(string $address): void
  {
    $this->address = $address;
  }

  public function setBirthdate(string $birthdate): void
  {
    $this->birthdate = $birthdate;
  }

  public function getAll(): string
  {
    return $this->getName() .
      ' ' .
      $this->getFirstname() .
      ' ' .
      $this->getAddress() .
      ' ' .
      $this->getBirthdate();
  }

  public function getAge($now)
  {
    $birthdate = new DateTime($this->getBirthdate());
    $age = $now->diff($birthdate);
    return $age->y;
  }
}
