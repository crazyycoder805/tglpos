<?php

namespace App\Http\Controllers;

use App\Models\Sales1;
use App\Models\Sales2;
use App\Models\Services;
use App\Models\SoftwareSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // For DB query if needed
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class Cashiers extends Controller
{
    //

    public function cashiersIndex(Request $req, $action = null)
    {
        try {
            if ($req->isMethod('POST') && $action === 'addDataSales1') {
                // Validate request
                $validated = $req->validate([
                    'date' => 'nullable|date',
                    'time' => 'nullable|date_format:H:i',
                    'service_barcode' => 'nullable|string',
                    'service_description' => 'nullable|string',
                    'service_sale_price' => 'nullable|string',
                    'service_qty' => 'nullable|string',
                    'service_total' => 'nullable|string',
                    'service_tax' => 'nullable|string',
                    'service_after_tax_total_input' => 'nullable|string',
                    'batch_id' => 'nullable|string',
                    'service_after_tax_total' => 'nullable|string',
                    'service_tax_value' => 'nullable|string',

                ]);

                // Create the sale record
                $sale1 = Sales1::create($validated);
                $lastSale1 = DB::table('sales_1')->latest('id')->first();


                // Return a JSON response
                return response()->json([
                    'message' => 'Data saved successfully!',
                    'data' => $sale1,
                    'lastInsertedRowSales1' => $lastSale1
                ], 200);
            }
            if ($req->isMethod('POST') && $action === 'deleteDataSales1') {
                $validated = $req->validate([
                    'id' => 'required|exists:sales_1,id', // Validate that the ID exists in the database
                ]);

                // Find the record and delete it
                $sale = Sales1::find($validated['id']);
                if ($sale) {
                    $sale->delete();

                    // Return a success response
                    return response()->json([
                        'message' => 'Data deleted successfully!',
                    ], 200);
                } else {
                    return response()->json([
                        'error' => 'Record not found.',
                    ], 404);
                }

            }
            if ($req->isMethod('POST') && $action === 'addDataSales2') {
                // Validate request
                $validated = $req->validate([
                    "service_inv" => "nullable|string",
                    "customer_name" => "nullable|string",
                    "total_qty" => "nullable|string",
                    "total_amount_before_tax" => "nullable|string",
                    "total_amount_after_tax" => "nullable|string",
                    "discount_in_percentage" => "nullable|string",
                    "discounted_final_amount" => "nullable|string",
                    "amount_received" => "nullable|string",
                    "change_return" => "nullable|string",
                    'date' => 'nullable|date',
                    'time' => 'nullable|date_format:H:i',
                    'batch_id' => 'nullable|string',
                    'cashier' => "nullable|string",
                    'total_service_tax_value' => "nullable|string",
                    'pos_fee_tax' => "nullable|string",

                ]);

                // Create the sale record in sales_2
                $sale2 = Sales2::create($validated);

                // Update the 'service_inv' column for all rows in sales_1 table
                if (!empty($validated['service_inv'])) {
                    Sales1::where(['batch_id' => $req->batch_id])->update(['service_inv' => $validated['service_inv']]);
                }

                // Retrieve all updated items from Sales1 based on the batch_id
                $sales1Items = Sales1::where(['batch_id' => $req->batch_id])->get();

                // Prepare items array from Sales1
                $items = [];
                foreach ($sales1Items as $item) {
                    $items[] = [
                        "ItemCode" => $item->service_barcode ?? "IT_1011", // Default if item_code is missing
                        "ItemName" => $item->service_description ?? "Unknown Item",
                        "Quantity" => (float) $item->service_qty ?? 1.0,
                        "PCTCode" => $item->pct_code ?? "11001010", // Default PCTCode
                        "TaxRate" => (float) $item->service_tax ?? 0.0,
                        "SaleValue" => (float) $item->service_sale_price ?? 0.0,
                        "TotalAmount" => (float) $item->service_after_tax_total ?? 0.0,
                        "TaxCharged" => (float) $item->service_tax_value ?? 0.0,
                        "Discount" => (float) $item->discount_in_percentage ?? 0.0,
                        "FurtherTax" => (float) $item->further_tax ?? 0.0,
                        "InvoiceType" => $item->invoice_type ?? 1,
                        "RefUSIN" => $item->ref_usin ?? null,

                    ];
                }

                // Prepare payload for the external API request
                $payload = [
                    "InvoiceNumber" => "",
                    "POSID" => 815373,
                    "USIN" => "USIN0",
                    "DateTime" => "{$validated['date']} {$validated['time']}",
                    "BuyerName" => $validated['customer_name'] ?? 'Unknown',
                    "BuyerPhoneNumber" => "0000-0000000",
                    "items" => $items, // Use the dynamically prepared items array
                    "TotalBillAmount" => (float) $validated['total_amount_after_tax'] + (float) $validated['pos_fee_tax'] ?? 1.0,
                    "TotalQuantity" => (float) $validated['total_qty'] ?? 1.0,
                    "TotalSaleValue" => (float) $validated['total_amount_before_tax'] ?? 1.0,
                    "TotalTaxCharged" => (float) $validated['pos_fee_tax'] ?? 1.0,
                    "PaymentMode" => 2,
                    "InvoiceType" => 1,
                    "FurtherTax" => (float) $validated['pos_fee_tax']
                ];

                // Send the request to the external API
                $client = new \GuzzleHttp\Client();
                $response = $client->post('https://esp.fbr.gov.pk:8244/FBR/v1/api/Live/PostData', [
                    'headers' => [
                        'Authorization' => 'Bearer 1298b5eb-b252-3d97-8622-a4a69d5bf818',
                        'Content-Type' => 'application/json',
                    ],
                    'json' => $payload,
                    'verify' => false
                ]);

                $apiResponse = json_decode($response->getBody(), true);

                $qr = new QrCode($apiResponse['InvoiceNumber']);

                $writer = new PngWriter();
                $result = $writer->write($qr);
                Sales2::where(['service_inv' => $req->service_inv])->update(["qr_code" => $result->getDataUri(), 'qr_code_image' => $result->getDataUri(), 'fbr_inv_number' => $apiResponse['InvoiceNumber']]);
                // Return a JSON response
                return response()->json([
                    'message' => 'Data saved and sent to external API successfully!',
                    'data' => $sale2,
                    'api_response' => $apiResponse,
                ], 200);

            }




            // Default response for GET or unhandled actions
            if ($req->isMethod('GET')) {
                // Fetch the last invoice number from sales_2 table
                $lastInvoice = DB::table('sales_2')->latest('service_inv')->value('service_inv');

                // Increment the invoice number by 1
                $nextInvoiceNumber = $lastInvoice ? $lastInvoice + 1 : 1; // Default to 1 if no invoice exists

                $allServices = Services::all();
                $allSettings = SoftwareSettings::all();

                // Pass the next invoice number to the view
                return view('cashiers', compact('allServices', 'nextInvoiceNumber', 'allSettings'));
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
