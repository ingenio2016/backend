<?php

namespace App;

use App\Supplier;
use App\ProductCategory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const PRODUCTO_DISPONIBLE = 'disponible';
    const PRODUCTO_NO_DISPONIBLE = 'no disponible';
    protected $fillable = [
    	'description',
    	'reference',
    	'category_id',
    	'tax_id',
    	'rate_12',
    	'rate_18',
    	'perceived_tax',
    	'detail_price',
    	'container_price',
    	'observations',
    	'image',
        'status',
    	'active',
    	'company_id'
    ];

    public function estaDisponible(){
        return $this->status == Product::PRODUCTO_DISPONIBLE;
    }

    public function categories(){
        return $this->belongsToMany(ProductCategory::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
}
