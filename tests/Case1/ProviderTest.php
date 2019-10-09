<?php

declare(strict_types = 1);

namespace App\Tests\Case1;

use App\Case1\Provider;
use App\Case1\Factory;
use App\Case1\Repository;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 */
class ProviderTest extends TestCase
{
    /**
     * @var Repository|MockObject
     */
    private $repository;

    /**
     * @var Factory|MockObject
     */
    private $factory;

    /**
     */
    protected function setUp()
    {
        $this->repository = $this->createMock(Repository::class);
        $this->factory = $this->createMock(Factory::class);
    }

    /**
     */
    public function testClassCreation()
    {
        $classOne = new Provider($this->repository, $this->factory);
        $this->assertSame($this->repository, $classOne->getRepository());
        $this->assertSame($this->factory, $classOne->getFactory());
    }
}
