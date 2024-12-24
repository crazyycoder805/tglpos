<?php

namespace App\Http\Controllers;

use App\Models\Businesses;
use App\Models\Categories;
use App\Models\Groups;
use App\Models\SubCategories;
use Illuminate\Http\Request;
use App\Models\SubsiDaries as ModelsSubsiDaries;
use App\Models\Types;
use Illuminate\Support\Facades\Validator;

class SubsiDaries extends Controller
{
    //

    public function subsiDariesIndex(Request $req, $id = null, $action = null)
    {

        try {
            $allSubsiDaries = ModelsSubsiDaries::all();
            $allBusinesses = Businesses::all();
            $allTypes = Types::all();
            $allSubCategories = SubCategories::all();
            $allCategories = Categories::all();
            $allGroups = Groups::all();

            if ($req->isMethod('GET')) {
                $singleSubsiDaries = null;

                if ($id && $action === 'edit') {
                    $singleSubsiDaries = ModelsSubsiDaries::find($id);
                    if (!$singleSubsiDaries) {
                        return redirect('subsidaries')->with('error', 'Subsidaries not found.');
                    }
                } elseif ($id && $action === 'delete') {
                    $singleSubsiDaries = ModelsSubsiDaries::find($id);
                    if (!$singleSubsiDaries) {
                        return redirect('subsidaries')->with('error', 'Subsidaries not found.');
                    }
                    $singleSubsiDaries->delete();
                    return redirect('subsidaries')->with('success', 'Subsidaries deleted successfully.');
                }

                return view('subsidaries', [
                    'allSubDaries' => $allSubsiDaries,
                    'singleSubDaries' => $singleSubsiDaries,
                    'allBusinesses' => $allBusinesses,
                    'allTypes' => $allTypes,
                    'allGroups' => $allGroups,
                    'allSubCategories' => $allSubCategories,

                    'allCategories' => $allCategories,

                ]);
            }

            if ($req->isMethod('POST')) {
                $this->validateSubCategories($req);

                ModelsSubsiDaries::create($req->all());
                return redirect('subsidaries')->with('success', 'Subsidaries saved successfully.');
            }

            if ($id && $action === 'edit' && $req->isMethod('PUT')) {
                $singleSubsiDaries = ModelsSubsiDaries::find($id);
                if (!$singleSubsiDaries) {
                    return redirect('subsidaries')->with('error', 'Subsidaries not found.');
                }

                $this->validateSubCategories($req);

                $singleSubsiDaries->update($req->all());
                return redirect('subsidaries')->with('success', 'Subsidaries updated successfully.');
            }
        } catch (\Exception $e) {

            return redirect('subsidaries')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    private function validateSubCategories(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'category_id' => 'required|exists:categories,id',
            'business_id' => 'required|exists:businesses,id',
            'type_id' => 'required|exists:types,id',
            'group_id' => 'required|exists:groups,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'code' => 'nullable|string',
            'description' => 'nullable|string',
            'name' => 'nullable|string',
            'address' => 'nullable|string',
            'phone_no' => 'nullable|string',
            'opu_balance' => 'nullable|string',
            'for_suppliers_or_for_clients' => 'nullable|string',

        ]);

        if ($validator->fails()) {
            redirect()->back()->withErrors($validator)->withInput()->throwResponse();
        }
    }
}
