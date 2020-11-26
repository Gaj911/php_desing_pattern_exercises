<?php
class RadioStation
{
    protected $frequency;

    public function __construct(float $frequency)
    {
        $this->frequency = $frequency;
    }

    public function getFrequency(): float
    {
        return $this->frequency;
    }

    public function isSame(RadioStation $stationComp)
    {
      return ($stationComp->frequency === $this->frequency);
    }

}