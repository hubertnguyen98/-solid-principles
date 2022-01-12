<?php

namespace Solid\OpenOrClosedPrinciple\Model\Valid;

abstract class ProductType
{
    protected $discountPrice;

    public function setDiscountPrice()
    {
        return $this->discountPrice;
    }

    abstract public function discountProduct();
}
