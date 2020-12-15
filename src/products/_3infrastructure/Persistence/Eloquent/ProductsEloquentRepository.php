<?php

declare(strict_types = 1 );

namespace Src\products\_3infrastructure\Persistence\Eloquent;

use Src\products\_3infrastructure\Persistence\ProductsRepositoryContract;

final class ProductsEloquentRepository implements ProductsRepositoryContract
{

    private $ProductsEloquent;

    public function __construct()
    {
        $this->ProductsEloquent = new ProductsEloquentModel();
    }

    public function search (){
        
    }

    public function all (){
        return $this->ProductsEloquent::all();
    }

}