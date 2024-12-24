<?php

namespace App\Http\Controllers;

use App\Models\SoftwareSettings as ModelsSoftwareSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SoftwareSettings extends Controller
{
    //
    public function softwareSettingsIndex(Request $req)
    {

        try {
            $allSettings = ModelsSoftwareSettings::all();
            if ($req->isMethod('GET')) {

                return view('software-settings', [
                    'allSettings' => $allSettings,
                ]);
            }

            if ($req->isMethod('PUT')) {
                $this->validateSettings($req);

                $allSettings->find(1)->update($req->all());
                return redirect('software-settings')->with('success', 'Software Settings updated successfully.');
            }


        } catch (\Exception $e) {

            return redirect('software-settings')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    private function validateSettings(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'tax' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            redirect()->back()->withErrors($validator)->withInput()->throwResponse();
        }
    }
}
