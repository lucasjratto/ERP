<?php

declare (strict_types = 1 );

namespace Src\products\_2application;

use Src\products\_1domain\Contracts\ProductsRepositoryContract;

final class GetAllProducts
{
    private $products;

    public function __construct(ProductsRepositoryContract $product)
    {
        $this->products = $product;
    }

    public function __invoke()
    {
        $productAll = $this->products->all();

        return $productAll;
    }

}