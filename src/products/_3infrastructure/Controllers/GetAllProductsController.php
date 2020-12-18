<?php

declare ( strict_types = 1);

namespace Src\products\_3infrastructure\Controllers;

use Src\products\_2application\GetAllProducts\Commands\GetAllProductsCommand;
use Src\products\_3infrastructure\Bus\CommandBus;
use Src\products\_3infrastructure\InfrastructureConfig\InfrastructureConfig;

class GetAllProductsController
{
    public function __invoke()
    {
        
        $ProductsRepository = InfrastructureConfig::build('ProductsRepository');

        $command = GetAllProductsCommand::create($ProductsRepository);

        return CommandBus::dispatch($command);

    }

}
