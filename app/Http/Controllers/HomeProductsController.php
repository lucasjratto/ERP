<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\products\_3infrastructure\Controllers\GetAllProductsController;

class HomeProductsController extends Controller
{
    public function index()
    {
        $products = new GetAllProductsController();
        //$PS = config('ddd.persistenceSelect');
        return $products();
        //return dump(config('ddd'));
        //return dump(config("ddd.persistenceTypes.$PS.productsInterface"));
        
    } 
}
