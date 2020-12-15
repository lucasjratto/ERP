<?php

declare (strict_types = 1);

namespace Src\products\_3infrastructure\Bus\Commands;

final class GetAllProductsCommand
{
    private $ProductsRepository;

    private function __construct(object $ProductsRepository)
    {
        $this->ProductsRepository = $ProductsRepository;
    }

    static public function create(object $ProductsRepository)
    {
        return new self($ProductsRepository);
    }

    public function getProductsRepository(): object
    {
        return $this->ProductsRepository;
    }

}