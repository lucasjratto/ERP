<?php

namespace Src\products\_3infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\products\_3infrastructure\Persistance\Eloquent\ProductsEloquentRepository;

class HomeProductsController extends Controller
{
    public function index()
    {

        $products = new ProductsEloquentRepository();

        return dump($products->all());
    } 

    public function create()
    {
        return 'create';
    }

    public function show()
    {
        return 'show';
    }
    
}
