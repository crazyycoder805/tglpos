<?php

namespace App\Http\Controllers;

use App\Models\Businesses;
use App\Models\Categories as ModelsCategories;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Categories extends Controller
{
    //
    public function categoriesIndex(Request $req, $id = null, $action = null)
    {

        try {
            $allCategories = ModelsCategories::all();
            $allBusinesses = Businesses::all();
            $allTypes = Types::all();

            if ($req->isMethod('GET')) {
                $singleCategories = null;

                if ($id && $action === 'edit') {
                    $singleCategories = ModelsCategories::find($id);
                    if (!$singleCategories) {
                        return redirect('categories')->with('error', 'Categories not found.');
                    }
                } elseif ($id && $action === 'delete') {
                    $singleCategories = ModelsCategories::find($id);
                    if (!$singleCategories) {
                        return redirect('categories')->with('error', 'Categories not found.');
                    }
                    $singleCategories->delete();
                    return redirect('categories')->with('success', 'Categories deleted successfully.');
                }

                return view('categories', [
                    'allCategories' => $allCategories,
                    'singleCategories' => $singleCategories,
                    'allBusinesses' => $allBusinesses,
                    'allTypes' => $allTypes
                ]);
            }

            if ($req->isMethod('POST')) {
                $this->validateCategories($req);

                ModelsCategories::create($req->all());
                return redirect('categories')->with('success', 'Categories saved successfully.');
            }

            if ($id && $action === 'edit' && $req->isMethod('PUT')) {
                $singleCategories = ModelsCategories::find($id);
                if (!$singleCategories) {
                    return redirect('categories')->with('error', 'Categories not found.');
                }

                $this->validateCategories($req);

                $singleCategories->update($req->all());
                return redirect('categories')->with('success', 'Categories updated successfully.');
            }
        } catch (\Exception $e) {

            return redirect('categories')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    private function validateCategories(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'category' => 'nullable|string',
            'business_id' => 'required|exists:businesses,id',
            'type_id' => 'required|exists:types,id',

        ]);

        if ($validator->fails()) {
            redirect()->back()->withErrors($validator)->withInput()->throwResponse();
        }
    }
}
