<?php

declare (strict_types = 1);

namespace Src\products\_3infrastructure\Factory\Laravel;

use Src\products\_3infrastructure\Factory\FactoryContract;

final class Factory implements FactoryContract
{
    public function __invoke(string $class): object
    {
        return resolve($class);
    }
}








