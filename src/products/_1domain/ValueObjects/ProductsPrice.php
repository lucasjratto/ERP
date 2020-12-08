<?php

declare(strict_types=1);

namespace src\products\_1domain\ValueObjects;

final class ProductsPrice
{
    private $ProductsPrice;

    public function __construct(float $Price)
    {
        $this->validate($Price);
        $this->ProductsPrice = $Price;
    }

    private function validate(float $Price):void
    {
        if ( $Price < 0 ) throw new NegativePrice();
    }

}