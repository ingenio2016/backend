<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
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
    	'discount_tax',
    	'photo',
        'active',
    	'company_id'
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
