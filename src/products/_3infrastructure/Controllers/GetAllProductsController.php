<?php

declare ( strict_types = 1);

namespace Src\products\_3infrastructure\Controllers;

use Src\products\_2application\GetAllProductsUseCase;
use Src\products\_3infrastructure\Factory\Factory;
use Src\products\_3infrastructure\InfrastructureConfig\InfrastructureConfig as InfrastructureConfigInfrastructureConfig;
use Src\products\_3infrastructure\Persistence\ProductsRepositoryContract;

class GetAllProductsController
{
    public function __invoke()
    {
        
        $ProductsRepository = InfrastructureConfigInfrastructureConfig::build('ProductsRepository'); 

        $products = new GetAllProductsUseCase($ProductsRepository);
        return $products();
        //return $ProductsRepository = InfrastructureConfig::getConfigContract('ProductsRepository'); 

        
        




    }

}
