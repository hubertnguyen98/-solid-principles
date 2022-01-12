<?php

namespace Solid\OpenOrClosedPrinciple\Model\Violation;

class Discounts
{
    public function discountProductsType(ProductType $productType)
    {
        if ($productType->getType() === 'giftcard') {
            $this->discountGiftCardType($productType);
        }

        if ($productType->getType() === 'simple') {
            $this->discountSimpleType($productType);
        }
    }

    public function discountGiftCardType($giftCard)
    {
        return $giftCard->setDiscountPrice(20);
    }

    public function discountSimpleType($simple)
    {
        return $simple->setDiscountPrice(10);
    }
}
