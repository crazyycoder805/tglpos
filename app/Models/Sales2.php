<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales2 extends Model
{
    //
    protected $table = "sales_2";
    protected $fillable = [
        "service_inv",
        "customer_name",
        "total_qty",
        "total_amount_before_tax",
        "total_amount_after_tax",
        "discount_in_percentage",
        "discounted_final_amount",
        "amount_received",
        "change_return",
        'date',
        'time',
        'cashier',
        'qr_code',
        'fbr_inv_number',
        'qr_code_image',
        'total_service_tax_value'




    ];
}
