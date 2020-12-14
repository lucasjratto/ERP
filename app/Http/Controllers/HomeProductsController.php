<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\products\_3infrastructure\Controllers\GetAllProductsController;

class HomeProductsController extends Controller
{
    public function index()
    {
        $products = new GetAllProductsController();
        return $products();
    } 
}
