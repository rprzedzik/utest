<?php


namespace App\Exercise1;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 */
class Factory
{
    /**
     * @param string $uuid
     *
     * @return UuidInterface
     */
    public function create(string $uuid): UuidInterface
    {
        if (!Uuid::isValid($uuid)) {
            throw new \InvalidArgumentException(sprintf('Value %s is not valid uuid', $uuid));
        }

        return Uuid::fromString($uuid);
    }
}