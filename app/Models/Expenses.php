<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    //
    protected $fillable = [
        'name',
        'opening_balance',
        'info_1',
        'info_2',
        'info_3',
        'expense_limit'
    ];

}
