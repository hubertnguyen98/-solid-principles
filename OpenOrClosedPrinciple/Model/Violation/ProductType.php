<?php

namespace Solid\OpenOrClosedPrinciple\Model\Violation;

class ProductType
{
    protected $type;

    protected $price;

    public function getType()
    {
        return $this->type;
    }

    public function setDiscountPrice()
    {
        return $this->price;
    }
}
