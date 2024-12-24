<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //
    protected $fillable = [
        'department',
        'name',
        'cost_without_tax',
        'barcode',
        'description',
        'sale_rate'
    ];

}
