<?php

namespace App\Http\Controllers;

use App\Models\Suppliers as ModelsSuppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Suppliers extends Controller
{
    //
    public function suppliersIndex(Request $req, $id = null, $action = null)
    {

        try {
            $allSuppliers = ModelsSuppliers::all();

            if ($req->isMethod('GET')) {
                $singleSuppliers = null;

                if ($id && $action === 'edit') {
                    $singleSuppliers = ModelsSuppliers::find($id);
                    if (!$singleSuppliers) {
                        return redirect('suppliers')->with('error', 'Supplier not found.');
                    }
                } elseif ($id && $action === 'delete') {
                    $singleSuppliers = ModelsSuppliers::find($id);
                    if (!$singleSuppliers) {
                        return redirect('suppliers')->with('error', 'Supplier not found.');
                    }
                    $singleSuppliers->delete();
                    return redirect('suppliers')->with('success', 'Supplier deleted successfully.');
                }

                return view('suppliers', [
                    'allSuppliers' => $allSuppliers,
                    'singleSuppliers' => $singleSuppliers,
                ]);
            }

            if ($req->isMethod('POST')) {
                $this->validateSuppliers($req);

                ModelsSuppliers::create($req->all());
                return redirect('suppliers')->with('success', 'Supplier saved successfully.');
            }

            if ($id && $action === 'edit' && $req->isMethod('PUT')) {
                $singleSuppliers = ModelsSuppliers::find($id);
                if (!$singleSuppliers) {
                    return redirect('suppliers')->with('error', 'Supplier not found.');
                }

                $this->validateSuppliers($req);

                $singleSuppliers->update($req->all());
                return redirect('suppliers')->with('success', 'Supplier updated successfully.');
            }
        } catch (\Exception $e) {

            return redirect('suppliers')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    private function validateSuppliers(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'nullable|string',
            'opening_balance' => 'nullable|string',
            'address' => 'nullable|string',
            'phone_office' => 'nullable|string',
            'city' => 'nullable|string',
            'tax_no' => 'nullable|string',

        ]);

        if ($validator->fails()) {
            redirect()->back()->withErrors($validator)->withInput()->throwResponse();
        }
    }
}
