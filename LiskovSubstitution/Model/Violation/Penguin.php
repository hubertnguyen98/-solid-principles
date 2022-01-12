<?php

namespace Solid\LiskovSubstitution\Model\Violation;

class Penguin extends Bird
{
    /**
     * @throws \Exception
     */
    public function canFly()
    {
        throw new \Exception(
            'Error because penguin  cannot fly!'
        );
    }
}
