<?php

declare(strict_types = 1);

namespace App\Tests\Example;

use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

/**
 * Example 4 - Data Provider
 */
class Example5Test extends TestCase
{
    /**
     * @param string $uuid
     *
     * @dataProvider validUuid
     */
    public function testValidUUid(string $uuid)
    {
        $this->assertTrue(Uuid::isValid($uuid));
    }

    /**
     * @param string $uuid
     *
     * @dataProvider invalidUuid
     */
    public function testInvalidUUid(string $uuid)
    {
        $this->assertFalse(Uuid::isValid($uuid));
    }

    /**
     * @return array
     */
    public function validUuid(): array
    {
        return [
            ['00000000-0000-0000-0000-000000000000'],
            ['9bbc6011-aee5-4b19-8224-bbf55f8fef31'],
            ['5bd640fa-7dc5-41af-ad1e-a011e502d534'],
            ['f89366e8-7324-4cf1-947b-7b0c693fc2cf'],
        ];
    }

    /**
     * @return array
     */
    public function invalidUuid(): array
    {
        return [
            ['12345678'],
            ['This is not valid uuid'],
            ['All your base are belong to us'],
            [''],
        ];
    }
}