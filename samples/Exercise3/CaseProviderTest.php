<?php

declare(strict_types = 1);

namespace App\Tests\Exercise3;

use App\Exercise3\Entity;
use App\Exercise3\FactoryInterface;
use App\Exercise3\Provider;
use App\Exercise3\RepositoryInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

/**
 */
class CaseProviderTest extends TestCase
{
    /**
     * @var RepositoryInterface|MockObject
     */
    private $repository;

    /**
     * @var FactoryInterface|MockObject
     */
    private $factory;

    /**
     * @var Uuid|MockObject
     */
    private $uuid;

    /**
     */
    protected function setUp()
    {
        $this->repository = $this->createMock(RepositoryInterface::class);
        $this->factory = $this->createMock(FactoryInterface::class);
        $this->uuid = $this->createMock(Uuid::class);
    }

    /**
     */
    public function testEntityExists()
    {
        $expected = $this->createMock(Entity::class);
        $this->repository->expects($this->once())->method('load')->willReturn($expected);
        $this->factory->expects($this->never())->method('create');
        $provider = new Provider($this->repository, $this->factory);
        $actual = $provider->provide($this->uuid);
        $this->assertSame($expected, $actual);
    }

    /**
     */
    public function testEntityNotExists()
    {
        $expected = $this->createMock(Entity::class);
        $this->repository->expects($this->once())->method('load')->willReturn(null);
        $this->factory->expects($this->once())->method('create')->willReturn($expected);
        $provider = new Provider($this->repository, $this->factory);
        $actual = $provider->provide($this->uuid);
        $this->assertSame($expected, $actual);
    }
}
