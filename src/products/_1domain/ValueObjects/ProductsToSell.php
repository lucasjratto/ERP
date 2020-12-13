<?php

declare(strict_types=1);

namespace Src\products\_1domain\ValueObjects;


final class ProductsToSell
{
    private $ProductsToSell;

    public function __construct(bool $ToSell)
    {
        $this->validate($ToSell);
        $this->ProductsToSell = $ToSell;
    }

    private function validate(bool $ToSell):void
    {
        
    }

}