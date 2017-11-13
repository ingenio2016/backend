<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class LicensePlan extends Model
{
    protected $fillable = [
    	'name',
    	'month_numbers'
    ];

    public function companies()
    {
    	return $this->hasMany(Company::class);
    }
}
