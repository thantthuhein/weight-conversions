<?php

namespace  ThantDev\WeightConversions;

class Weight
{
    protected $kilograms;

    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct($kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }
}
