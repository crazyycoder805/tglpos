<?php

namespace App\Http\Controllers;

use App\Models\Businesses as ModelsBusinesses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Businesses extends Controller
{
    //

    public function businessesIndex(Request $req, $id = null, $action = null)
    {

        try {
            $allBusinesses = ModelsBusinesses::all();
            if ($req->isMethod('GET')) {
                $singleBusinesses = null;

                if ($id && $action === 'edit') {
                    $singleBusinesses = ModelsBusinesses::find($id);
                    if (!$singleBusinesses) {
                        return redirect('businesses')->with('error', 'Businesses not found.');
                    }
                } elseif ($id && $action === 'delete') {
                    $singleBusinesses = ModelsBusinesses::find($id);
                    if (!$singleBusinesses) {
                        return redirect('businesses')->with('error', 'Businesses not found.');
                    }
                    $singleBusinesses->delete();
                    return redirect('businesses')->with('success', 'Businesses deleted successfully.');
                }

                return view('businesses', [
                    'allBusinesses' => $allBusinesses,
                    'singleBusinesses' => $singleBusinesses,
                ]);
            }

            if ($req->isMethod('POST')) {
                $this->validateBusinesses($req);

                ModelsBusinesses::create($req->all());
                return redirect('businesses')->with('success', 'Businesses saved successfully.');
            }

            if ($id && $action === 'edit' && $req->isMethod('PUT')) {
                $singleBusinesses = ModelsBusinesses::find($id);
                if (!$singleBusinesses) {
                    return redirect('businesses')->with('error', 'Businesses not found.');
                }

                $this->validateBusinesses($req);

                $singleBusinesses->update($req->all());
                return redirect('businesses')->with('success', 'Businesses updated successfully.');
            }
        } catch (\Exception $e) {

            return redirect('businesses')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    private function validateBusinesses(Request $req)
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
