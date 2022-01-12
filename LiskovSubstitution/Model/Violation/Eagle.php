<?php

namespace Solid\LiskovSubstitution\Model\Violation;

class Eagle extends Bird
{
    public function canFly(): string
    {
        return 'Eagle';
    }
}
