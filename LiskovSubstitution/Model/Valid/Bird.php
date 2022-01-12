<?php

namespace Solid\LiskovSubstitution\Model\Valid;

class Bird
{
    /**
     * @var Eagle
     */
    private $eagle;

    /**
     * @var Sparrows
     */
    private $sparrows;

    /**
     * @param Eagle $eagle
     * @param Sparrows $sparrows
     */
    public function __construct(
        Eagle $eagle,
        Sparrows $sparrows
    ) {
        $this->eagle = $eagle;
        $this->sparrows = $sparrows;
    }

    /**
     * @return array
     */
    public function getAllBird(): array
    {
        return [
            $this->eagle,
            $this->sparrows
        ];
    }
}
