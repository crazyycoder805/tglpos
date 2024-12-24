<?php

namespace App\Http\Controllers;

use App\Models\Expenses as ModelsExpenses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Expenses extends Controller
{
    //
    public function expensesIndex(Request $req, $id = null, $action = null)
    {

        try {
            $allExpenses = ModelsExpenses::all();
            if ($req->isMethod('GET')) {
                $singleExpenses = null;

                if ($id && $action === 'edit') {
                    $singleExpenses = ModelsExpenses::find($id);
                    if (!$singleExpenses) {
                        return redirect('expenses')->with('error', 'Expenses not found.');
                    }
                } elseif ($id && $action === 'delete') {
                    $singleExpenses = ModelsExpenses::find($id);
                    if (!$singleExpenses) {
                        return redirect('expenses')->with('error', 'Expenses not found.');
                    }
                    $singleExpenses->delete();
                    return redirect('expenses')->with('success', 'Expenses deleted successfully.');
                }

                return view('expenses', [
                    'allExpenses' => $allExpenses,
                    'singleExpenses' => $singleExpenses,
                ]);
            }

            if ($req->isMethod('POST')) {
                $this->validateExpenses($req);

                ModelsExpenses::create($req->all());
                return redirect('expenses')->with('success', 'Expenses saved successfully.');
            }

            if ($id && $action === 'edit' && $req->isMethod('PUT')) {
                $singleExpenses = ModelsExpenses::find($id);
                if (!$singleExpenses) {
                    return redirect('expenses')->with('error', 'Expenses not found.');
                }

                $this->validateExpenses($req);

                $singleExpenses->update($req->all());
                return redirect('expenses')->with('success', 'Expenses updated successfully.');
            }
        } catch (\Exception $e) {

            return redirect('expenses')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    private function validateExpenses(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => 'nullable|string',
            'opening_balance' => 'nullable|string',
            'info_1' => 'nullable|string',
            'info_2' => 'nullable|string',
            'info_3' => 'nullable|string',
            'expense_limit' => 'nullable|string',

        ]);

        if ($validator->fails()) {
            redirect()->back()->withErrors($validator)->withInput()->throwResponse();
        }
    }
}
