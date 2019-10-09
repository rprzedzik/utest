<?php

declare(strict_types = 1);

namespace App\Case1;

/**
 */
class Repository
{
    /**
     * @var string
     */
    private $propertyOne;

    /**
     * @var int;
     */
    private $propertyTwo;

    /**
     * @param string $propertyOne
     * @param int    $propertyTwo
     */
    public function __construct(string $propertyOne, int $propertyTwo)
    {
        $this->propertyOne = $propertyOne;
        $this->propertyTwo = $propertyTwo;
    }

    /**
     * @return string
     */
    public function getPropertyOne(): string
    {
        return $this->propertyOne;
    }

    /**
     * @return string
     */
    public function getPropertyTwo(): string
    {
        return $this->propertyTwo;
    }
}
