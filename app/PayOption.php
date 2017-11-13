<?php

namespace App;

use App\Customer;
use Illuminate\Database\Eloquent\Model;

class PayOption extends Model
{
    protected $fillable = [
    	'name'
    ];

    public function customers(){
    	return $this->hasMany(Customer::class);
    }
}
