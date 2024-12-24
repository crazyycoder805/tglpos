<?php

namespace App\Http\Controllers;

use App\Models\Sales2;
use Illuminate\Http\Request;

class DailyReports extends Controller
{
    //
    public function dailyReportsIndex(Request $req, $action = null)
    {
        try {

            if ($req->isMethod("POST") && $action == "getData") {
                $req->validate([
                    'from_date' => 'required|date',
                    'to_date' => 'required|date',
                ]);

                // Fetch products based on the date range
                $products = Sales2::whereBetween('date', [$req->from_date, $req->to_date])
                    ->get()
                    ->map(function ($product) {
                        return [
                            'service_inv' => $product->service_inv,
                            'customer_name' => $product->customer_name,
                            'total_qty' => $product->total_qty,
                            'total_amount_before_tax' => $product->total_amount_before_tax,
                            'total_amount_after_tax' => $product->total_amount_after_tax,
                            'discount_in_percentage' => $product->discount_in_percentage,
                            'discounted_final_amount' => $product->discounted_final_amount,
                            'amount_received' => $product->amount_received,
                            'change_return' => $product->change_return,
                            'time' => $product->time,
                            'date' => $product->date,
                            'cashier' => $product->cashier,

                        ];
                    });

                // Return the filtered data as JSON
                return response()->json(['data' => $products]);

            }
            if ($req->isMethod("GET")) {
                return view("reports.daily-reports");
            }

            return response()->json(['message' => 'Unhandled request.'], 400);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An unexpected error occurred.',
                'details' => $e->getMessage(),
            ], 500);
        }
    }

}
