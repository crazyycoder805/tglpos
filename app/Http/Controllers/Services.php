<?php

namespace App\Http\Controllers;

use App\Models\Services as ModelsServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Services extends Controller
{
    //
    public function servicesIndex(Request $req, $id = null, $action = null)
    {

        try {
            $allServices = ModelsServices::all();

            if ($req->isMethod('GET')) {
                $singleServices = null;

                if ($id && $action === 'edit') {
                    $singleServices = ModelsServices::find($id);
                    if (!$singleServices) {
                        return redirect('services')->with('error', 'Type not found.');
                    }
                } elseif ($id && $action === 'delete') {
                    $singleServices = ModelsServices::find($id);
                    if (!$singleServices) {
                        return redirect('services')->with('error', 'Type not found.');
                    }
                    $singleServices->delete();
                    return redirect('services')->with('success', 'Type deleted successfully.');
                }

                return view('services', [
                    'allServices' => $allServices,
                    'singleServices' => $singleServices,
                ]);
            }

            if ($req->isMethod('POST')) {
                $this->validateServices($req);

                ModelsServices::create($req->all());
                return redirect('services')->with('success', 'Type saved successfully.');
            }

            if ($id && $action === 'edit' && $req->isMethod('PUT')) {
                $singleServices = ModelsServices::find($id);
                if (!$singleServices) {
                    return redirect('services')->with('error', 'Type not found.');
                }

                $this->validateServices($req);

                $singleServices->update($req->all());
                return redirect('services')->with('success', 'Type updated successfully.');
            }
        } catch (\Exception $e) {

            return redirect('services')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    private function validateServices(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'department' => 'nullable|string',
            'name' => 'nullable|string',
            'cost_without_tax' => 'nullable|string',
            'barcode' => 'nullable|string',
            'description' => 'nullable|string',
            'sale_rate' => 'nullable|string',



        ]);

        if ($validator->fails()) {
            redirect()->back()->withErrors($validator)->withInput()->throwResponse();
        }
    }
}
