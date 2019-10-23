<?php

declare(strict_types = 1);

namespace App\Tests\Exercise2;

use App\Exercise2\Calculator;
use PHPUnit\Framework\TestCase;

/**
 */
class CaseCalculatorTest extends TestCase
{
    /**
     * @param float $i
     * @param float $j
     * @param float $result
     *
     * @dataProvider getAdditionData
     */
    public function testAddition(float $i, float $j, float $result)
    {
        $calculation = Calculator::addition($i, $j);
        $this->assertEquals($result, $calculation);
    }

    /**
     * @param float $i
     * @param float $j
     * @param float $result
     *
     * @dataProvider getSubtractionData
     */
    public function testSubtraction(float $i, float $j, float $result)
    {
        $calculation = Calculator::subtraction($i, $j);
        $this->assertEquals($result, $calculation);
    }

    /**
     * @param float $i
     * @param float $j
     * @param float $result
     *
     * @dataProvider getDivisionData
     */
    public function testDivision(float $i, float $j, float $result)
    {
        $calculation = Calculator::division($i, $j);
        $this->assertEquals($result, $calculation);
    }

    /**
     * @expectedException \DivisionByZeroError
     */
    public function testDivisionByZero()
    {
        $this->expectException(\DivisionByZeroError::class);
        Calculator::division(1, 0);
    }

    /**
     * @return array
     */
    public function getAdditionData(): array
    {
        return [
            [0, 0, 0], [1, 1, 2], [100, 100, 200], [100, 1, 101], [0.1, 0.1, 0.2], [-1, 1, 0], [1, -1, 0], [-5, -7, -12],
        ];
    }

    /**
     * @return array
     */
    public function getSubtractionData(): array
    {
        return [
            [0, 0, 0], [1, 1, 0], [100, 100, 0], [0, 100, -100], [0.1, 0.1, 0], [-1, 1, -2], [1, -1, 2], [-5, -7, 2],
        ];
    }

    /**
     * @return array
     */
    public function getDivisionData(): array
    {
        return [
            [1, 1, 1], [100, 100, 1], [100, 1, 100], [0.1, 0.1, 1], [-1, 1, -1], [1, -1, -1],
        ];
    }
}
