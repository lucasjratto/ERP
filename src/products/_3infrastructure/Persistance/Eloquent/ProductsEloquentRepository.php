<?php

declare(strict_types = 1 );

namespace src\products\_3infrastructure\Persistance\Eloquent;

use src\products\_1domain\Contracts\ProductsRepositoryContract;


final class ProductsEloquentRepository implements ProductsRepositoryContract
{

    private $ProductsEloquent;

    public function __construct()
    {
        $this->ProductsEloquent = new ProductsEloquentModel();
    }

    public function search (){
        
    }

}