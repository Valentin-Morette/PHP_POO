<?php

class Speedometer
{
  public const KM_CONVERSION = 1.609;
  public const MILES_CONVERSION = 0.621;

  public static function kmIntoMiles(int $speed)
  {
    return $speed * self::MILES_CONVERSION;
  }

  public static function milesIntoKm(int $speed)
  {
    return $speed * self::KM_CONVERSION;
  }
}
