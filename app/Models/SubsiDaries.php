<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubsiDaries extends Model
{
    //
    protected $table = "subsidaries";
    protected $fillable = [
        'category_id',
        'business_id',
        'type_id',
        'group_id',
        'sub_category_id',
        'code',
        'description',
        'name',
        'address',
        'phone_no',
        'opu_balance',
        'for_suppliers_or_for_clients',

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
    public function group()
    {
        return $this->belongsTo(Groups::class, 'group_id', 'id');
    }
    public function business()
    {
        return $this->belongsTo(Businesses::class, 'business_id', 'id');
    }
}
