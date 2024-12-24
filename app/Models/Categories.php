<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //

    protected $fillable = [
        'category',
        'type_id',
        'business_id',

    ];

    public function type()
    {
        return $this->belongsTo(Types::class, 'type_id', 'id');
    }

    public function business()
    {
        return $this->belongsTo(Businesses::class, 'business_id', 'id');
    }
}
