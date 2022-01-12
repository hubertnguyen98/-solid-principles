<?php

namespace Solid\LiskovSubstitution\Model\Violation;

class Bird
{
    /**
     * @var Eagle
     */
    private $eagle;

    /**
     * @var Penguin
     */
    private $penguin;

    /**
     * @param Eagle $eagle
     * @param Penguin $penguin
     */
    public function __construct(
        Eagle $eagle,
        Penguin $penguin
    ) {
        $this->eagle = $eagle;
        $this->penguin = $penguin;
    }

    /**
     * @return array
     */
    public function getAllBird(): array
    {
        return [
            $this->eagle,
            $this->penguin
        ];
    }
}
