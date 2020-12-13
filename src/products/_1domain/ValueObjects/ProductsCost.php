<?php

declare(strict_types=1);

namespace Src\products\_1domain\ValueObjects;

final class ProductsCost
{
    private $ProductsCost;

    public function __construct(float $Cost)
    {
        $this->validate($Cost);
        $this->ProductsCost = $Cost;
    }

    private function validate(float $Cost):void
    {
        if ( $Cost < 0 ) throw new NegativeCost();
    }

}