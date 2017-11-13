<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasketInventory extends Model
{
    protected $fillable = [ 
        'product_basket_id', 
        'stock',
        'warehouse_id',
        'company_id'
    ];
}
