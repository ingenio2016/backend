<?php

namespace App;

use App\City;
use App\Company;
use App\Customer;
use App\Supplier;
use App\Warehouse;
use App\Department;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
    	'name'
    ];

    public function departments()
    {
    	return $this->hasMany(Department::class);
    }

    public function cities()
    {
    	return $this->hasMany(City::class);
    }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function warehouses()
    {
        return $this->hasMany(Warehouse::class);
    }
}
