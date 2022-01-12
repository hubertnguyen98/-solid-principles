<?php

namespace Solid\OpenOrClosedPrinciple\Model\Valid;

class Discounts
{
    public function discountProductsType(ProductType $productType)
    {
        $productType->discountProduct();
    }
}
