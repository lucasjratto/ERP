<?php

declare(strict_types = 1);

namespace Src\products\_1domain\Contracts;

interface ProductsRepositoryContract
{
    public function search ();
    public function all ();
}

