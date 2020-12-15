<?php

declare (strict_types = 1 );

namespace Src\products\_2application;

use Src\products\_3infrastructure\Persistence\ProductsRepositoryContract;

final class GetAllProductsUseCase
{
    private $products;

    public function __construct(ProductsRepositoryContract $products)
    {
        $this->products = $products;
    }

    public function __invoke(): object
    {
        return $this->products->all();
    }

}