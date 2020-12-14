<?php

use Src\products\_1domain\Contracts\ProductsRepositoryContract;
use Src\products\_3infrastructure\Persistence\Eloquent\ProductsEloquentRepository;

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */
    
    
    'persistenceSelect' => 'Eloquent',

    'persistenceTypes' => 
                        [
                            'Eloquent' => 
                                        [
                                            'productsInterface' => ProductsRepositoryContract::class,
                                            'productsClass' => ProductsEloquentRepository::class,
                                        ],
                        ],
                        /* Example of other persistence type
                        [
                        'Other' => 
                                    [
                                        'productsInterface' => ProductsRepositoryContract::class,
                                        'productsClass' => ProductsEloquentRepository::class,
                                    ],
                        ],
                        */
                        
];
