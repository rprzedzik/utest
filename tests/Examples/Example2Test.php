<?php

declare(strict_types = 1);

namespace App\Tests\Example;

use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

/**
 * Example 2 - InstanceOf assertion on object and on mock
 */
class Example2Test extends TestCase
{
    const NIL = '00000000-0000-0000-0000-000000000000';

    /**
     */
    public function testInstanceOfOnObject()
    {
        $actual = Uuid::fromString(self::NIL);

        $this->assertInstanceOf(Uuid::class, $actual);
        $this->assertEquals(self::NIL, $actual->toString());
    }

    /**
     */
    public function testInstanceOfOnMock()
    {
        $actual = $this->createMock(Uuid::class);
        $actual->method('toString')->willReturn('00000000-0000-0000-0000-000000000000');

        $this->assertInstanceOf(Uuid::class, $actual);
    }
}