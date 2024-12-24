<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    //
    protected $fillable = [
        "name",
        "opening_balance",
        "address",
        "phone_office",
        "city",
        "tax_no",
    ];
}
