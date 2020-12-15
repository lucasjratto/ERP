<?php

declare ( strict_types = 1);

namespace Src\products\_3infrastructure\Controllers;

use Src\products\_1domain\Contracts\ProductsRepositoryContract;
use Src\products\_2application\GetAllProductsUseCase;
use Src\products\_3infrastructure\Factory\Factory;
use Src\products\_3infrastructure\InfrastructureConfig;

class GetAllProductsController
{
    public function __invoke()
    {
        $ProductsRepository = Factory::build(ProductsRepositoryContract::class);

        $products = new GetAllProductsUseCase($ProductsRepository);
        return $products();
        

        
        




    }

}
