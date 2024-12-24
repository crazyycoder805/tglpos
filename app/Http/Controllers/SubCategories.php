<?php

namespace App\Http\Controllers;

use App\Models\Businesses;
use App\Models\Categories;
use App\Models\SubCategories as ModelsSubCategories;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategories extends Controller
{
    //

    public function subCategoriesIndex(Request $req, $id = null, $action = null)
    {

        try {
            $allSubCategories = ModelsSubCategories::all();
            $allBusinesses = Businesses::all();
            $allTypes = Types::all();
            $allCategories = Categories::all();

            if ($req->isMethod('GET')) {
                $singleSubCategories = null;

                if ($id && $action === 'edit') {
                    $singleSubCategories = ModelsSubCategories::find($id);
                    if (!$singleSubCategories) {
                        return redirect('sub-categories')->with('error', 'Sub Category not found.');
                    }
                } elseif ($id && $action === 'delete') {
                    $singleSubCategories = ModelsSubCategories::find($id);
                    if (!$singleSubCategories) {
                        return redirect('sub-categories')->with('error', 'Sub Category not found.');
                    }
                    $singleSubCategories->delete();
                    return redirect('sub-categories')->with('success', 'Sub Category deleted successfully.');
                }

                return view('sub-categories', [
                    'allSubCategories' => $allSubCategories,
                    'singleSubCategories' => $singleSubCategories,
                    'allBusinesses' => $allBusinesses,
                    'allTypes' => $allTypes,
                    'allCategories' => $allCategories
                ]);
            }

            if ($req->isMethod('POST')) {
                $this->validateSubCategories($req);

                ModelsSubCategories::create($req->all());
                return redirect('sub-categories')->with('success', 'Sub Category saved successfully.');
            }

            if ($id && $action === 'edit' && $req->isMethod('PUT')) {
                $singleSubCategories = ModelsSubCategories::find($id);
                if (!$singleSubCategories) {
                    return redirect('sub-categories')->with('error', 'Sub Category not found.');
                }

                $this->validateSubCategories($req);

                $singleSubCategories->update($req->all());
                return redirect('sub-categories')->with('success', 'Sub Category updated successfully.');
            }
        } catch (\Exception $e) {

            return redirect('sub-categories')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    private function validateSubCategories(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'category_id' => 'required|exists:categories,id',
            'business_id' => 'required|exists:businesses,id',
            'type_id' => 'required|exists:types,id',
            'sub_category' => 'nullable|string',

        ]);

        if ($validator->fails()) {
            redirect()->back()->withErrors($validator)->withInput()->throwResponse();
        }
    }
}
