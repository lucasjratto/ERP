<?php

declare(strict_types = 1);

namespace Src\products\_3infrastructure\Persistence;

interface ProductsRepositoryContract
{
    public function search ();
    public function all ();
}

