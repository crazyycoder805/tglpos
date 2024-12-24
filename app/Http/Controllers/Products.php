<?php

namespace App\Http\Controllers;

use App\Models\Products as ModelsProducts;
use App\Models\Sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Products extends Controller
{
    //
    public function productsIndex(Request $req, $id = null, $action = null)
    {

        try {
            $allProducts = ModelsProducts::all();
            $allSections = Sections::all();

            if ($req->isMethod('GET')) {
                $singleProducts = null;

                if ($id && $action === 'edit') {
                    $singleProducts = ModelsProducts::find($id);
                    if (!$singleProducts) {
                        return redirect('products')->with('error', 'Products not found.');
                    }
                } elseif ($id && $action === 'delete') {
                    $singleProducts = ModelsProducts::find($id);
                    if (!$singleProducts) {
                        return redirect('products')->with('error', 'Products not found.');
                    }
                    $singleProducts->delete();
                    return redirect('products')->with('success', 'Products deleted successfully.');
                }

                return view('products', [
                    'allProducts' => $allProducts,
                    'singleProducts' => $singleProducts,
                    'allSections' => $allSections
                ]);
            }

            if ($req->isMethod('POST')) {
                $this->validateProducts($req);

                ModelsProducts::create($req->all());
                return redirect('products')->with('success', 'Products saved successfully.');
            }

            if ($id && $action === 'edit' && $req->isMethod('PUT')) {
                $singleProducts = ModelsProducts::find($id);
                if (!$singleProducts) {
                    return redirect('products')->with('error', 'Products not found.');
                }

                $this->validateProducts($req);

                $singleProducts->update($req->all());
                return redirect('products')->with('success', 'Products updated successfully.');
            }
        } catch (\Exception $e) {

            return redirect('products')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    private function validateProducts(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'batch_no' => 'nullable|string',
            'product_name' => 'nullable|string',
            'cost_price' => 'nullable|string',
            'sale_price' => 'nullable|string',
            'quantity' => 'nullable|string',
            'packing_size' => 'nullable|string',
            'reorder_level' => 'nullable|string',
            'section_id' => 'required|exists:sections,id',
            'expiry_date' => 'nullable|date',

        ]);

        if ($validator->fails()) {
            redirect()->back()->withErrors($validator)->withInput()->throwResponse();
        }
    }
}
