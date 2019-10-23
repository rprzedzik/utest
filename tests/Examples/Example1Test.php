<?php

declare(strict_types = 1);

namespace App\Tests\Example;

use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

/**
 * Example 1 - Diffidence between same and Equal assertion
 */
class Example1Test extends TestCase
{
    const NIL = '00000000-0000-0000-0000-000000000000';
    const UUID = '00000000-0000-0000-0000-000000000001';

    /**
     */
    public function testNotEqualAndNotSame()
    {
        $expected =  Uuid::fromString(self::NIL);
        $actual = Uuid::fromString(self::UUID);

        $this->assertNotEquals($expected, $actual);
        $this->assertNotSame($expected, $actual);
    }

    /**
     */
    public function testEqualAndNotSame()
    {
        $expected =  Uuid::fromString(self::NIL);
        $actual = Uuid::fromString(self::NIL);

        $this->assertEquals($expected, $actual);
        $this->assertNotSame($expected, $actual);
    }

    /**
     */
    public function testEqualAndSame()
    {
        $expected =  Uuid::fromString(self::NIL);
        $actual = $expected;

        $this->assertEquals($expected, $actual);
        $this->assertSame($expected, $actual);
    }
}