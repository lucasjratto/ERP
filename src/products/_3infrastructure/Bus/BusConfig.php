<?php

declare (strict_types = 1);

namespace Src\products\_3infrastructure\Bus;

use ReflectionClass;
use Src\products\_2application\GetAllProducts\Commands\GetAllProductsCommand;
use Src\products\_2application\GetAllProducts\Handlers\GetAllProductsHandler;
use Src\products\_3infrastructure\InfrastructureConfig\InfrastructureConfig;

final class BusConfig
{
    private static $Config = 
                        [
                            GetAllProductsCommand::class => GetAllProductsHandler::class,
                            
                        ];
    
    private function __construct(){}

    static public function getConfigHandler (object $config): string
    {
        $class = self::$Config[$config::class];
        return $class;
    }

}   