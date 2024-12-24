<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
class ManageUsers extends Controller
{
    //
    public function manageUsersIndex(Request $req, $id = null, $action = null)
    {
        $allUsers = User::all();

        if ($req->isMethod('GET')) {
            $singleManageUser = null;

            if ($id && $action === "edit") {
                $singleManageUser = User::find($id);
                if (!$singleManageUser) {
                    session()->flash('error', 'User not found.');
                    return redirect("manage-users");
                }
            } elseif ($id && $action === "delete") {
                $singleManageUser = User::find($id);
                if ($singleManageUser) {
                    $singleManageUser->delete();
                    session()->flash('success', 'User deleted successfully.');
                } else {
                    session()->flash('error', 'User not found.');
                }
                return redirect("manage-users");
            }

            return view("manage-users", [
                "allManageUsers" => $allUsers,
                'singleManageUser' => $singleManageUser,
            ]);
        }

        if ($req->isMethod('POST')) {
            $validator = Validator::make($req->all(), [
                'name' => 'required|string|max:255',
                'username' => 'required|unique:users,username',
                'password' => 'required|min:6',
                'role' => 'required|string|in:Admin,Cashier',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            try {
                $user = User::create([
                    'name' => $req->name,
                    'username' => $req->username,
                    'password' => Hash::make($req->password),
                    'role' => $req->role,
                    'email' => ''
                ]);

                event(new Registered($user));
                session()->flash('success', 'User created successfully.');
            } catch (\Exception $e) {
                session()->flash('error', 'An error occurred while creating the user.' . $e->getMessage());
            }

            return redirect("manage-users");
        }

        if ($id && $action === "edit" && $req->isMethod('PUT')) {
            $singleManageUser = User::find($id);

            if (!$singleManageUser) {
                session()->flash('error', 'User not found.');
                return redirect("manage-users");
            }

            $validator = Validator::make($req->all(), [
                'name' => 'required|string|max:255',
                'username' => 'required|unique:users,username,' . $id,
                'password' => 'nullable|min:6',
                'role' => 'required|string|in:Admin,Cashier',
                'email' => ''
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            try {
                $singleManageUser->update([
                    'name' => $req->name,
                    'username' => $req->username,
                    'password' => $req->password ? Hash::make($req->password) : $singleManageUser->password,
                    'role' => $req->role,
                ]);

                session()->flash('success', 'User updated successfully.');
            } catch (\Exception $e) {
                session()->flash('error', 'An error occurred while updating the user.');
            }

            return redirect("manage-users");
        }
    }
}
