<?php

declare (strict_types = 1);

namespace Src\products\_2application\GetAllProducts\Commands;

use Src\products\_3infrastructure\Persistence\ProductsRepositoryContract;

final class GetAllProductsCommand implements GetAllProductsCommandContract
{
    private $ProductsRepository;

    private function __construct(ProductsRepositoryContract $ProductsRepository)
    {
        $this->ProductsRepository = $ProductsRepository;
    }

    static public function create(ProductsRepositoryContract $ProductsRepository): GetAllProductsCommandContract
    {
        return new self($ProductsRepository);
    }

    public function getProductsRepository(): ProductsRepositoryContract
    {
        return $this->ProductsRepository;
    }

}