<?php

declare (strict_types = 1);

namespace Src\products\_2application\GetAllProducts\Handlers;

use Src\products\_2application\CommandHandlerContract;
use Src\products\_2application\GetAllProducts\Commands\GetAllProductsCommandContract;

final class GetAllProductsHandler implements CommandHandlerContract
{
    private function __construct(){}

    static public function handle(object $command): object
    {
        $ProductsRepositoy = $command->getProductsRepository();
        return $ProductsRepositoy->all();
    }

}