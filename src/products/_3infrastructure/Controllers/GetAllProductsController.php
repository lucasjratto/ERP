<?php

declare ( strict_types = 1);

namespace Src\products\_3infrastructure\Controllers;

use Src\products\_1domain\Contracts\ProductsRepositoryContract;
use Src\products\_2application\GetAllProductsUseCase;

class GetAllProductsController
{

    public function __invoke()
    {
        $ProductsRepository = resolve(ProductsRepositoryContract::class);

        $products = new GetAllProductsUseCase($ProductsRepository);
        return $products();
    }

}
