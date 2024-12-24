<?php

namespace App\Http\Controllers;

use App\Models\Businesses;
use App\Models\Types as ModelsTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Types extends Controller
{
    //
    public function typesIndex(Request $req, $id = null, $action = null)
    {

        try {
            $allTypes = ModelsTypes::all();
            $allBusinesses = Businesses::all();

            if ($req->isMethod('GET')) {
                $singleTypes = null;

                if ($id && $action === 'edit') {
                    $singleTypes = ModelsTypes::find($id);
                    if (!$singleTypes) {
                        return redirect('types')->with('error', 'Type not found.');
                    }
                } elseif ($id && $action === 'delete') {
                    $singleTypes = ModelsTypes::find($id);
                    if (!$singleTypes) {
                        return redirect('types')->with('error', 'Type not found.');
                    }
                    $singleTypes->delete();
                    return redirect('types')->with('success', 'Type deleted successfully.');
                }

                return view('types', [
                    'allTypes' => $allTypes,
                    'singleTypes' => $singleTypes,
                    'allBusinesses' => $allBusinesses
                ]);
            }

            if ($req->isMethod('POST')) {
                $this->validateTypes($req);

                ModelsTypes::create($req->all());
                return redirect('types')->with('success', 'Type saved successfully.');
            }

            if ($id && $action === 'edit' && $req->isMethod('PUT')) {
                $singleTypes = ModelsTypes::find($id);
                if (!$singleTypes) {
                    return redirect('types')->with('error', 'Type not found.');
                }

                $this->validateTypes($req);

                $singleTypes->update($req->all());
                return redirect('types')->with('success', 'Type updated successfully.');
            }
        } catch (\Exception $e) {

            return redirect('types')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    private function validateTypes(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'type' => 'nullable|string',
            'business_id' => 'required|exists:businesses,id',


        ]);

        if ($validator->fails()) {
            redirect()->back()->withErrors($validator)->withInput()->throwResponse();
        }
    }
}
