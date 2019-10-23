<?php

declare(strict_types = 1);

namespace App\Tests\Example;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

/**
 * Example 3 - Using setUp method
 */
class Example3Test extends TestCase
{
    const NIL = '00000000-0000-0000-0000-000000000000';

    /**
     * @var Uuid|MockObject
     */
    private $mock;

    /**
     */
    protected function setUp()
    {
        $this->mock = $this->createMock(Uuid::class);
        $this->mock->method('toString')->willReturn(self::NIL);
    }

    /**
     */
    public function testInstanceOf()
    {
        $this->assertInstanceOf(Uuid::class, $this->mock);
    }

    /**
     */
    public function testEquality()
    {
        $this->assertEquals(self::NIL, $this->mock->toString());
    }
}