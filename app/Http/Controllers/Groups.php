<?php

namespace App\Http\Controllers;

use App\Models\Businesses;
use App\Models\Categories;
use App\Models\Groups as ModelsGroups;
use App\Models\SubCategories;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Groups extends Controller
{
    //
    public function groupsIndex(Request $req, $id = null, $action = null)
    {

        try {
            $allGroups = ModelsGroups::all();
            $allBusinesses = Businesses::all();
            $allTypes = Types::all();
            $allSubCategories = SubCategories::all();
            $allCategories = Categories::all();

            if ($req->isMethod('GET')) {
                $singleGroups = null;

                if ($id && $action === 'edit') {
                    $singleGroups = ModelsGroups::find($id);
                    if (!$singleGroups) {
                        return redirect('groups')->with('error', 'Groups not found.');
                    }
                } elseif ($id && $action === 'delete') {
                    $singleGroups = ModelsGroups::find($id);
                    if (!$singleGroups) {
                        return redirect('groups')->with('error', 'Groups not found.');
                    }
                    $singleGroups->delete();
                    return redirect('groups')->with('success', 'Groups deleted successfully.');
                }

                return view('groups', [
                    'allGroups' => $allGroups,
                    'singleGroups' => $singleGroups,
                    'allBusinesses' => $allBusinesses,
                    'allTypes' => $allTypes,
                    'allSubCategories' => $allSubCategories,
                    'allCategories' => $allCategories

                ]);
            }

            if ($req->isMethod('POST')) {
                $this->validateGroups($req);

                ModelsGroups::create($req->all());
                return redirect('groups')->with('success', 'Groups saved successfully.');
            }

            if ($id && $action === 'edit' && $req->isMethod('PUT')) {
                $singleGroups = ModelsGroups::find($id);
                if (!$singleGroups) {
                    return redirect('groups')->with('error', 'Groups not found.');
                }

                $this->validateGroups($req);

                $singleGroups->update($req->all());
                return redirect('groups')->with('success', 'Groups updated successfully.');
            }
        } catch (\Exception $e) {

            return redirect('groups')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    private function validateGroups(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'business_id' => 'required|exists:businesses,id',
            'type_id' => 'required|exists:types,id',
            'groups' => 'nullable|string|',

        ]);

        if ($validator->fails()) {
            redirect()->back()->withErrors($validator)->withInput()->throwResponse();
        }
    }
}
