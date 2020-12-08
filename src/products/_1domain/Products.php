<?php

declare (strict_types = 1 );

namespace src\products\_1domain;

use src\products\_1domain\ValueObjects\ProductsCost;
use src\products\_1domain\ValueObjects\ProductsDescription;
use src\products\_1domain\ValueObjects\ProductsName;
use src\products\_1domain\ValueObjects\ProductsPrice;
use src\products\_1domain\ValueObjects\ProductsToBuy;
use src\products\_1domain\ValueObjects\ProductsToSell;
use src\products\_1domain\ValueObjects\ToSellAndToBuyFalse;

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
