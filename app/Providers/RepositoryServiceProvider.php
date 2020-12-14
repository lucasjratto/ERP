<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\products\_1domain\Contracts\ProductsRepositoryContract;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $PS = config('ddd.persistenceSelect');
        

        $this->app->bind(
                // Contract
                config("ddd.persistenceTypes.$PS.productsInterface"),
                // Instance
                config("ddd.persistenceTypes.$PS.productsClass"),
        );
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
