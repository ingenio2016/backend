<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $fillable = [
    	'description',
    	'rate',
    	'company_id'
    ];

    public function products(){
    	return $this->hasMany(Product::class);
    }
}
