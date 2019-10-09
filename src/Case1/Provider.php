<?php

declare(strict_types = 1);

namespace App\Case1;

/**
 */
class Provider
{
    /**
     * @var Repository
     */
    private $repository;

    /**
     * @var Factory
     */
    private $factory;

    /**
     * @param Repository $repository
     * @param Factory    $factory
     */
    public function __construct(Repository $repository, Factory $factory)
    {
        $this->repository = $repository;
        $this->factory = $factory;
    }

    /**
     * @return Repository
     */
    public function getRepository(): Repository
    {
        return $this->repository;
    }

    /**
     * @return Factory
     */
    public function getFactory(): Factory
    {
        return $this->factory;
    }
}
