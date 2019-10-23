<?php

namespace App\Exercise3;

use Ramsey\Uuid\Uuid;

/**
 */
interface FactoryInterface
{
    public function create(Uuid $id): Entity;
}