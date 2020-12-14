<?php

declare (strict_types = 1 );

namespace Src\products\_2application;

use Src\products\_1domain\Contracts\ProductsRepositoryContract;

final class GetAllProductsUseCase
{
    private $products;

    public function __construct(ProductsRepositoryContract $products)
    {
        $this->products = $products;
    }

    public function __invoke(): array
    {
        return $this->products->all();
    }

}