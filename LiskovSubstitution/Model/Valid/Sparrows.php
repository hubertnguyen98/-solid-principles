<?php

namespace Solid\LiskovSubstitution\Model\Valid;

class Sparrows extends Bird
{
    public function canFly(): string
    {
        return 'Sparrows';
    }
}
