<?php

namespace MixPlay\Math;

class CalculatorFactory
{
    const CIENTIFIC = 1;

    const ASTRONOMIC = 2;

    const REGULAR = 3;

    public static $COUNTER = 0;

    private function __construct() {}

    public function createCalculator(int $type)
    {
        self::$COUNTER++;
        
        if($type == self::CIENTIFIC) {
            return new CientificCalculator;
        }
        if($type == self::ASTRONOMIC) {
            return new AstronomicCalculator;
        }
        if($type == self::REGULAR) {
            return new Calculator;
        }
        throw new InvalidArgumentException('Missing calculator type, given ' . $type);
    }
}{}
