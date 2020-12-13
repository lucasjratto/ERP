<?php

declare(strict_types=1);

namespace Src\products\_1domain\ValueObjects;


final class ProductsToBuy
{
    private $ProductsToBuy;

    public function __construct(bool $ToBuy)
    {
        $this->validate($ToBuy);
        $this->ProductsToBuy = $ToBuy;
    }

    private function validate(bool $ToSell):void
    {
        
    }

}