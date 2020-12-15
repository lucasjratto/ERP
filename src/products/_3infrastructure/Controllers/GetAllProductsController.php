<?php

declare ( strict_types = 1);

namespace Src\products\_3infrastructure\Controllers;

use Src\products\_2application\GetAllProductsUseCase;
use Src\products\_2application\Handlers\GetAllProductsHandler;
use Src\products\_3infrastructure\Bus\Commands\GetAllProductsCommand;
use Src\products\_3infrastructure\InfrastructureConfig\InfrastructureConfig;

class GetAllProductsController
{
    public function __invoke()
    {
        
        $ProductsRepository = InfrastructureConfig::build('ProductsRepository'); 

        /*
        $products = new GetAllProductsUseCase($ProductsRepository);
        return $products();
        */

        $command = GetAllProductsCommand::create($ProductsRepository);

        return GetAllProductsHandler::handle($command);



    }

}
