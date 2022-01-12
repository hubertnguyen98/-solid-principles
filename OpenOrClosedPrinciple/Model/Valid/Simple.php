<?php

namespace Solid\OpenOrClosedPrinciple\Model\Valid;

class Simple extends ProductType
{
    public function discountProduct()
    {
        return $this->setDiscountPrice(20);
    }
}
