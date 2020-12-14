<?php

declare (strict_types = 1 );

namespace Src\products\_2application;

use Src\products\_1domain\Contracts\ProductsRepositoryContract;

final class GetAllProductsUseCase
{
    private $products;

    public function __construct()
    {
        $this->products = resolve(ProductsRepositoryContract::class);
    }

    public function __invoke()
    {
        $productAll = $this->products->all();

        return $productAll;
    }

}