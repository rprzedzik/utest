<?php

declare(strict_types = 1);

namespace App\Tests\Exercise1;

use App\Exercise1\Factory;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

/**
 */
class CaseFactoryTest extends TestCase
{
    /**
     * Test creation form valid uuid string
     */
    public function testValidUUid()
    {
        $uuid = '33444dd8-06aa-475c-8d88-237c683a5ed2';
        $factory = new Factory();
        $result = $factory->create($uuid);
        $this->assertNotNull($result);
        $this->assertInstanceOf(Uuid::class, $result);
        $this->assertEquals($uuid, (string) $result);
    }

    /**
     * Test creation from invalid uuid
     *
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Value any not valid uuid is not valid uuid
     */
    public function testNotValidUUid()
    {
        $uuid = 'any not valid uuid';
        $factory = new Factory();
        $factory->create($uuid);
    }
}
