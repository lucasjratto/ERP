<?php

declare (strict_types = 1);

namespace Src\products\_3infrastructure\Factory;

interface FactoryContract
{
    public function __invoke(string $class): object;
}