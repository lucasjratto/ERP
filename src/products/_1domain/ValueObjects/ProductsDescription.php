<?php

declare(strict_types=1);

namespace src\products\_1domain\ValueObjects;


final class ProductsDescription
{
    private $ProductDescription;

    public function __construct(string $description)
    {
        $this->validate($description);
        $this->ProductDescription = $description;
    }

    private function validate(string $description):void
    {
        
    }

}