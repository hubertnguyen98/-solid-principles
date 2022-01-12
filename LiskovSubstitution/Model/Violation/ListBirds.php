<?php

namespace Solid\LiskovSubstitution\Model\Violation;

class ListBirds
{
    /**
     * @var Bird
     */
    private $bird;

    /**
     * @param Bird $bird
     */
    public function __construct(
        Bird $bird
    ) {
        $this->bird = $bird;
    }

    /**
     * @return array
     */
    public function getAllBirdCanFly(): array
    {
        $listBirds = [];
        foreach ($this->bird->getAllBird() as $bird) {
            /** @var Bird $bird */
            $listBirds =  $bird->canFly();
        }
        return $listBirds;
    }
}
