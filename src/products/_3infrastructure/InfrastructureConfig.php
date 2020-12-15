<?php

declare (strict_types = 1);

namespace Src\products\_3infrastructure;

use Src\products\_3infrastructure\Bus\Laravel\CommandBus;
use Src\products\_3infrastructure\Factory\Laravel\Factory;

final class InfrastructureConfig
{
    private static $Config = 
                        [
                            'Factory' => Factory::class,
                            'Bus' => CommandBus::class,
                        ];
    
    private function __construct(){}

    static public function getConfig (string $config): object
    {
        $class = self::$Config[$config];
        return new $class;
    }

}