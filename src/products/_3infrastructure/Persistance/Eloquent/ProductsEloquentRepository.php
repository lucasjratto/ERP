<?php

declare(strict_types = 1 );

namespace Src\products\_3infrastructure\Persistance\Eloquent;

use Src\products\_1domain\Contracts\ProductsRepositoryContract;


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