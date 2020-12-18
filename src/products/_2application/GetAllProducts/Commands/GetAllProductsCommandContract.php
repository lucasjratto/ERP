<?php

declare (strict_types = 1);

namespace Src\products\_2application\GetAllProducts\Commands;

use Src\products\_3infrastructure\Persistence\ProductsRepositoryContract;

interface GetAllProductsCommandContract
{
    static public function create(ProductsRepositoryContract $ProductsRepository): GetAllProductsCommandContract;
    public function getProductsRepository(): ProductsRepositoryContract;
}