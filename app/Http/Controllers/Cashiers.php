<?php

namespace App\Http\Controllers;

use App\Models\Sales1;
use App\Models\Sales2;
use App\Models\Services;
use App\Models\SoftwareSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class Cashiers extends Controller
{
    // Apply middleware for authentication and CSRF protection

    public function cashiersIndex(Request $req, $action = null)
    {
        try {
            if ($req->isMethod('POST')) {
                // Handle 'addDataSales1'
                if ($action === 'addDataSales1') {
                    return $this->handleAddDataSales1($req);
                }

                // Handle 'deleteDataSales1'
                if ($action === 'deleteDataSales1') {
                    return $this->handleDeleteDataSales1($req);
                }

                // Handle 'addDataSales2'
                if ($action === 'addDataSales2') {
                    return $this->handleAddDataSales2($req);
                }
            }

            if ($req->isMethod('GET')) {
                return $this->handleGetRequest();
            }

            return response()->json(['message' => 'Unhandled request.'], 400);
        } catch (\Throwable $e) {
            Log::error('Unexpected error in Cashiers controller', ['error' => $e->getMessage()]);
            return response()->json([
                'error' => 'An unexpected error occurred.',
                'details' => 'Please check the logs for more details.',
                'log' => $e->getMessage()
            ], 500);
        }
    }

    private function handleAddDataSales1(Request $req)
    {
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

        $sale1 = Sales1::create($validated);
        $lastSale1 = Sales1::latest('id')->first();

        return response()->json([
            'message' => 'Data saved successfully!',
            'data' => $sale1,
            'lastInsertedRowSales1' => $lastSale1
        ], 200);
    }

    private function handleDeleteDataSales1(Request $req)
    {
        $validated = $req->validate([
            'id' => 'nullable|exists:sales_1,id',
        ]);

        $sale = Sales1::find($validated['id']);
        $sale->delete();

        return response()->json(['message' => 'Data deleted successfully!'], 200);
    }

    private function handleAddDataSales2(Request $req)
    {
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

        $sale2 = Sales2::create($validated);

        if (!empty($validated['service_inv'])) {
            Sales1::where('batch_id', $req->batch_id)->update(['service_inv' => $validated['service_inv']]);
        }

        $sales1Items = Sales1::where('batch_id', $req->batch_id)->get();
        $items = $sales1Items->map(function ($item) {
            return [
                "ItemCode" => $item->service_barcode ?? "IT_1011", // Default if item_code is missing
                "ItemName" => $item->service_description ?? "Unknown Item",
                "Quantity" => (float) $item->service_qty ?? 1.0,
                "PCTCode" => $item->pct_code ?? "11001010", // Default PCTCode
                "TaxRate" => (float) $item->service_tax ?? 0.0,
                "SaleValue" => (float) $item->service_total ?? 0.0,
                "TotalAmount" => (float) $item->service_after_tax_total ?? 0.0,
                "TaxCharged" => (float) $item->service_tax_value ?? 0.0,
                "FurtherTax" => (float) $item->further_tax ?? 0.0,
                "InvoiceType" => $item->invoice_type ?? 1,
                "RefUSIN" => $item->ref_usin ?? null,
            ];
        });
        $discountAmount = ($validated['discount_in_percentage'] / 100) * $validated['total_amount_after_tax'];

        $payload = [
            "InvoiceNumber" => "",
            "POSID" => env('POS_ID'),
            "USIN" => "USIN0",
            "DateTime" => "{$validated['date']} {$validated['time']}",
            "BuyerName" => $validated['customer_name'] ?? 'Unknown',
            "BuyerPhoneNumber" => "0000-0000000",
            "items" => $items, // Use the dynamically prepared items array
            "TotalBillAmount" => (float) $validated['discounted_final_amount'] ?? 1.0,
            "TotalQuantity" => (float) $validated['total_qty'] ?? 1.0,
            "TotalSaleValue" => (float) $validated['total_amount_before_tax'] ?? 1.0,
            "TotalTaxCharged" => (float) Sales1::where(['batch_id' => $req->batch_id])->sum('service_tax_value') ?? 1.0,
            "PaymentMode" => 2,
            "InvoiceType" => 1,
            "Discount" => (float) $discountAmount ?? 1.0,

            "FurtherTax" => (float) $validated['pos_fee_tax']
        ];

        $client = new Client();
        $response = $client->post(env('FBR_API_URL'), [
            'headers' => [
                'Authorization' => 'Bearer ' . env('FBR_API_KEY'),
                'Content-Type' => 'application/json',
            ],
            'json' => $payload,
            'verify' => false
        ]);

        $apiResponse = json_decode($response->getBody(), true);
        $qr = new QrCode($apiResponse['InvoiceNumber']);
        $writer = new PngWriter();
        $result = $writer->write($qr);

        Sales2::where('service_inv', $req->service_inv)->update([
            "qr_code" => $result->getDataUri(),
            "qr_code_image" => $result->getDataUri(),

            'fbr_inv_number' => $apiResponse['InvoiceNumber'],
        ]);

        return response()->json([
            'message' => 'Data saved and sent to external API successfully!',
            'data' => $sale2,
            'api_response' => $apiResponse,

        ], 200);
    }

    private function handleGetRequest()
    {
        $lastInvoice = Sales2::latest('service_inv')->value('service_inv');
        $nextInvoiceNumber = $lastInvoice ? $lastInvoice + 1 : 1;

        $allServices = Services::all();
        $allSettings = SoftwareSettings::all();

        return view('cashiers', compact('allServices', 'nextInvoiceNumber', 'allSettings'));
    }
}
