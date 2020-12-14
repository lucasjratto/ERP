<?php

declare(strict_types = 1 );

namespace Src\products\_3infrastructure\Persistence\Eloquent;

use Illuminate\Database\Eloquent\Model;

final class ProductsEloquentModel extends Model 
{

    protected $table = 'products';
    protected $primaryKey = 'id';
    /*
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;
    protected $fillable = ['name', 'description', 'to_sell', 'to_buy', 'cost', 'price'];
    */
}