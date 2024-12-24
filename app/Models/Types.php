<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    //
    protected $fillable = [
        "type",
        "business_id",
    ];
    public function business()
    {
        return $this->belongsTo(Businesses::class, 'business_id', 'id');
    }
}
