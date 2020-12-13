<?php

declare (strict_types = 1 );

namespace Src\products\_1domain;

use Src\products\_1domain\ValueObjects\ProductsCost;
use Src\products\_1domain\ValueObjects\ProductsDescription;
use Src\products\_1domain\ValueObjects\ProductsName;
use Src\products\_1domain\ValueObjects\ProductsPrice;
use Src\products\_1domain\ValueObjects\ProductsToBuy;
use Src\products\_1domain\ValueObjects\ProductsToSell;
use Src\products\_1domain\ValueObjects\ToSellAndToBuyFalse;

final class Products 
{
    private $name;
    private $description;
    private $tosell;
    private $tobuy;
    private $cost;
    private $price;

    public function __construct
        (
            ProductsName $name,
            ProductsDescription $description,
            ProductsToSell $tosell,
            ProductsToBuy $tobuy,
            ProductsCost $cost,
            ProductsPrice $price
        )
    {
        $this->validate($name, $description, $tosell, $tobuy, $cost, $price);
        $this->name = $name;
        $this->description = $description;
        $this->tosell = $tosell;
        $this->tobuy = $tobuy;
        $this->cost = $cost;
        $this->price = $price;
    }

    private function validate 
        (
            ProductsName $name,
            ProductsDescription $description,
            ProductsToSell $tosell,
            ProductsToBuy $tobuy,
            ProductsCost $cost,
            ProductsPrice $price
        ):void
    {
        if (!$tosell && !$tobuy) throw new ToSellAndToBuyFalse();
    }

}
