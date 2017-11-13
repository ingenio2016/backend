<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
    	'name',
    	'identification',
    	'country_id',
    	'department_id',
    	'city_id',
    	'address',
    	'telephone',
    	'email',
    	'photo',
        'active',
    	'company_id'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
