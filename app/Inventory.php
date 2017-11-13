<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'guide_number', 
        'product_id', 
        'stock',
        'warehouse_id',
        'company_id'
    ];
}
