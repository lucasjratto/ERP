<?php

declare ( strict_types = 1);

namespace Src\products\_3infrastructure\Controllers;

use Src\products\_1domain\Contracts\ProductsRepositoryContract;
use Src\products\_2application\GetAllProductsUseCase;

class GetAllProductsController
{

    public function __invoke()
    {
        $products = new GetAllProductsUseCase();
        return $products();
    }

}
