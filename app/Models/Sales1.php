<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales1 extends Model
{
    //
    protected $table = "sales_1";
    protected $fillable = [
        'date',
        'time',
        'service_barcode',
        'service_description',
        'service_sale_price',
        'service_qty',
        'service_total',
        'service_tax',
        'service_after_tax_total',
        'service_inv',
        'batch_id',
        'service_tax_value'
    ];
}
