<?php

declare(strict_types = 1);

namespace App\Exercise3;

use Ramsey\Uuid\Uuid;

/**
 */
interface RepositoryInterface
{
    /**
     * @param Uuid $id
     *
     * @return Entity|null
     */
    public function load(Uuid $id);

    /**
     * @param Entity $entity
     *
     * @return mixed
     */
    public function save(Entity $entity);

    /**
     * @param Uuid $id
     *
     * @return mixed
     */
    public function delete(Uuid $id);
}