<?php

namespace Solid\LiskovSubstitution\Model\Valid;

class Eagle extends Bird
{
    public function canFly(): string
    {
        return 'Eagle';
    }
}
