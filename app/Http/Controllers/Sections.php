<?php

namespace App\Http\Controllers;

use App\Models\Sections as ModelsSections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Sections extends Controller
{
    //
    public function sectionsIndex(Request $req, $id = null, $action = null)
    {


        try {
            $allSections = ModelsSections::all();
            if ($req->isMethod('GET')) {
                $singleSections = null;

                if ($id && $action === 'edit') {
                    $singleSections = ModelsSections::find($id);
                    if (!$singleSections) {
                        return redirect('sections')->with('error', 'Section not found.');
                    }
                } elseif ($id && $action === 'delete') {
                    $singleSections = ModelsSections::find($id);
                    if (!$singleSections) {
                        return redirect('sections')->with('error', 'Section not found.');
                    }
                    $singleSections->delete();
                    return redirect('sections')->with('success', 'Section deleted successfully.');
                }

                return view('sections', [
                    'allSections' => $allSections,
                    'singleSections' => $singleSections,
                ]);
            }

            if ($req->isMethod('POST')) {
                $this->validateSections($req);

                ModelsSections::create($req->all());
                return redirect('sections')->with('success', 'Section saved successfully.');
            }

            if ($id && $action === 'edit' && $req->isMethod('PUT')) {
                $singleSections = ModelsSections::find($id);
                if (!$singleSections) {
                    return redirect('sections')->with('error', 'Section not found.');
                }

                $this->validateSections($req);

                $singleSections->update($req->all());
                return redirect('sections')->with('success', 'Section updated successfully.');
            }
        } catch (\Exception $e) {

            return redirect('sections')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    private function validateSections(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'title' => 'nullable|string',
            'date' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            redirect()->back()->withErrors($validator)->withInput()->throwResponse();
        }
    }
}
