<?php

declare(strict_types = 1);

namespace App\Exercise3;

use Ramsey\Uuid\Uuid;

/**
 */
class Provider
{
    /**
     * @var RepositoryInterface
     */
    private $repository;

    /**
     * @var FactoryInterface
     */
    private $factory;

    /**
     * @param RepositoryInterface $repository
     * @param FactoryInterface    $factory
     */
    public function __construct(RepositoryInterface $repository, FactoryInterface $factory)
    {
        $this->repository = $repository;
        $this->factory = $factory;
    }

    /**
     * @param Uuid $id
     *
     * @return Entity
     */
    public function provide(Uuid $id): Entity
    {
        $entity = $this->repository->load($id);
        if (null === $entity) {
            $entity = $this->factory->create($id);
        }

        return $entity;
    }
}
