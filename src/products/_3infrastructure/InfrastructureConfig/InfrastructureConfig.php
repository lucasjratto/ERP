<?php

declare (strict_types = 1);

namespace Src\products\_3infrastructure\InfrastructureConfig;

use ReflectionClass;
use Src\products\_3infrastructure\Bus\Laravel\CommandBus;
use Src\products\_3infrastructure\Persistence\Eloquent\ProductsEloquentRepository;
use Src\products\_3infrastructure\Persistence\ProductsRepositoryContract;

final class InfrastructureConfig
{
    private static $Config = 
                        [
                            'ProductsRepository' => [
                                                        ProductsRepositoryContract::class,
                                                        ProductsEloquentRepository::class,
                                                    ],
                            'Bus' => CommandBus::class,
                        ];
    
    private function __construct(){}

    static public function getConfigContract (string $config): string
    {
        $class = self::$Config[$config][0];
        return $class;
    }
    
    static public function getConfigClass (string $config): string
    {
        $class = self::$Config[$config][1];
        return $class;
    }

    static public function build (string $config): object
    {
        $cl = new ReflectionClass(InfrastructureConfig::getConfigClass('ProductsRepository'));
        if (!$cl->implementsInterface(InfrastructureConfig::getConfigContract('ProductsRepository'))) throw new notImplementsInterface();

        $class = self::$Config[$config][1];
        return new $class;
    }

}