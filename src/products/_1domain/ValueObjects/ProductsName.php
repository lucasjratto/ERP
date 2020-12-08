<?php

declare(strict_types=1);

namespace src\products\_1domain\ValueObjects;


final class ProductsName 
{
    private $ProductName;

    public function __construct(string $name)
    {
        $this->validate($name);
        $this->ProductName = $name;
    }

    private function validate(string $name):void
    {
        if ( strlen($name) < 3 ) throw new NameTooShort();
    }

}