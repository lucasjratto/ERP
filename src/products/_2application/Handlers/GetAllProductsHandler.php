<?php

declare (strict_types = 1);

namespace Src\products\_2application\Handlers;

use Src\products\_2application\CommandHandlerContract;

final class GetAllProductsHandler implements CommandHandlerContract
{
    private function __construct(){}

    static public function handle(object $command): object
    {
        $ProductsRepositoy = $command->getProductsRepository();
        return $ProductsRepositoy->all();
    }

}