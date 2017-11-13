<?php

namespace App;

use App\Inventory;
use App\BasketInventory;
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

    public function stocks(){
        return $this->hasMany(Inventory::class);
    }

    public function basket_stocks()
    {
        return $this->hasMany(BasketInventory::class);
    }
}
