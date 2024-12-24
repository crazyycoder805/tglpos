<?php

namespace App\Http\Controllers;

use App\Models\Sales1;
use App\Models\Sales2;
use Illuminate\Http\Request;

class PrintSmallInvoice extends Controller
{
    //

    public function printSmallInvoiceIndex($id)
    {
        $allSales1 = Sales1::where(['service_inv' => $id])->get();
        $allSales2 = Sales2::where(['service_inv' => $id])->first();
        return view("print-small-invoice", compact("allSales1", "allSales2"));
    }
}
