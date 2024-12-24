<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    //

    protected $fillable = [
        "sub_category_id",
        "category_id",
        "business_id",
        "type_id",
        "groups",

    ];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }

    public function sub_category()
    {
        return $this->belongsTo(SubCategories::class, 'sub_category_id', 'id');
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
