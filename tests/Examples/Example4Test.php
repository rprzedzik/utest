<?php

declare(strict_types = 1);

namespace App\Tests\Example;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Exception\InvalidUuidStringException;
use Ramsey\Uuid\Uuid;

/**
 * Example 4 - Test Exception
 */
class Example4Test extends TestCase
{
    const INVALID = 'INVALID UUID';

    /**
     * @var Uuid|MockObject
     */
    private $mock;

    /**
     * @expectedException \Ramsey\Uuid\Exception\InvalidUuidStringException
     * @expectedExceptionMessage Invalid UUID string: invalid uuid
     */
    public function testInvalidUuidFormatAnnotation()
    {
        Uuid::fromString(self::INVALID);
    }

    /**
     */
    public function testInvalidUuidFormatAssertion()
    {
        $this->expectException(InvalidUuidStringException::class);
        $this->expectExceptionMessage('Invalid UUID string: invalid uuid');

        Uuid::fromString(self::INVALID);
    }

}