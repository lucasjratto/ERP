<?php

declare (strict_types = 1);

namespace Src\products\_3infrastructure\Factory;

use Src\products\_3infrastructure\InfrastructureConfig;

final class Factory 
{
    private function __construct(){}

    static public function build(string $class): object
    {
        $Factory = InfrastructureConfig::getConfig('Factory');
        return $Factory($class);
    }
    
}

