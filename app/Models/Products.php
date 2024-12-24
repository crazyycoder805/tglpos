<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $fillable = [
        'batch_no',
        'product_name',
        'cost_price',
        'sale_price',
        'quantity',
        'packing_size',
        'reorder_level',
        'section_id',
        'expiry_date',
    ];
    public function section()
    {
        return $this->belongsTo(Sections::class, 'section_id', 'id');
    }
}
