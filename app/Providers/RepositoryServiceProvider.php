<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\products\_3infrastructure\Persistence\Eloquent\ProductsEloquentRepository;
use Src\products\_3infrastructure\Persistence\ProductsRepositoryContract;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductsRepositoryContract::class, ProductsEloquentRepository::class);
        
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
