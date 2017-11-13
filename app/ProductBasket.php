<?php

namespace App;

use App\Product;
use App\BasketInventory;
use Illuminate\Database\Eloquent\Model;

class ProductBasket extends Model
{
    protected $fillable = [
    	'name',
    	'reference',
    	'bottles_number',
        'price',
        'company_id'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function basket_stocks()
    {
        return $this->hasMany(BasketInventory::class);
    }
}
