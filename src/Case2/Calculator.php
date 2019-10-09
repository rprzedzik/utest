<?php

declare(strict_types = 1);

namespace App\Case2;

/**
 */
class Calculator
{
    /**
     * @param float $i
     * @param float $j
     *
     * @return float
     */
    public static function addition(float $i, float $j): float
    {
        return $i + $j;
    }

    /**
     * @param float $i
     * @param float $j
     *
     * @return float
     */
    public static function subtraction(float $i, float $j): float
    {
        return $i - $j;
    }

    /**
     * @param float $i
     * @param float $j
     *
     * @return float
     *
     * @throws \DivisionByZeroError
     */
    public static function division(float $i, float $j): float
    {
        if(0.0 !== $j) {
            return $i / $j;
        }

        throw new \DivisionByZeroError('Divider must be different the 0');
    }
}
