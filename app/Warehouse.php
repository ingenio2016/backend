<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = [
        'name', 
        'reference',
        'country_id',
        'department_id',
        'city_id',
        'address',
        'telephone',
        'company_id',
        'active'
    ];
}
