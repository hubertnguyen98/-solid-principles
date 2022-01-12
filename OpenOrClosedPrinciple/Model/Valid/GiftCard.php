<?php

namespace Solid\OpenOrClosedPrinciple\Model\Valid;

class GiftCard extends ProductType
{
    public function discountProduct()
    {
        return $this->setDiscountPrice(10);
    }
}
