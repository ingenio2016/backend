<?php

namespace App;

use App\Tax;
use App\User;
use App\Product;
use App\Customer;
use App\Supplier;
use App\Inventory;
use App\Warehouse;
use App\ProductBasket;
use App\BasketInventory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
    	'name',
    	'identification',
    	'country_id',
    	'department_id',
    	'city_id',
    	'address',
    	'telephone',
    	'legal_person',
    	'email',
    	'licence_plan_id',
    	'licence_date',
    	'months_number',
    	'logo',
    	'users_number',
    	'max_users_number'
    ];

    public function customers()
    {
        return $this->belongsToMany(Customer::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function taxes()
    {
        return $this->hasMany(Tax::class);
    }

    public function warehouses()
    {
        return $this->hasMany(Warehouse::class);
    }

    public function product_baskets()
    {
        return $this->hasMany(ProductBasket::class);
    }

    public function stocks(){
        return $this->hasMany(Inventory::class);
    }

    public function basket_stocks()
    {
        return $this->hasMany(BasketInventory::class);
    }
}

