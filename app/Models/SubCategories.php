<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    //
    protected $fillable = [
        'category_id',
        'business_id',
        'type_id',
        'sub_category'
    ];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(Types::class, 'type_id', 'id');
    }

    public function business()
    {
        return $this->belongsTo(Businesses::class, 'business_id', 'id');
    }
}
