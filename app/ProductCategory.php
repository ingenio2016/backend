<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
    	'description',
    	'company_id'
    ];

    public function products(){
    	return $this->belongsToMany(Product::class);
    }
}
